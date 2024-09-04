<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\leitura;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Item;


class LeituraController extends Controller
{

    
    public function lost(Request $resquest){
        $tagsCadastradas = Tag::pluck('codigo')->toArray();
        $ultimaLeituraPorTag = leitura::select('EPC', 'Data', 'company_id')
        ->whereIn('EPC', $tagsCadastradas) // Filtra pelas tags cadastradas
        ->whereIn('Data', function($query) {
            $query->selectRaw('MAX(Data)')
                ->from('leituras')
                ->groupBy('EPC');
        })
        ->get()
        ->keyBy('EPC')
        ->map(function ($item) {
            return [
                'data' => $item->Data,
                'company_id' => $item->company_id,
            ];
        })
        ->toArray();
    
    // Verificar se a última leitura foi feita nos últimos 30 dias
    $tagsNaoLidas = [];
    $trintaDiasAtras = now()->subDays(); // Calcula a data de 30 dias atrás

    foreach ($ultimaLeituraPorTag as $epc => $info) {
        $dataLeitura = \Carbon\Carbon::parse($info['data']); // Converte a data para Carbon
        
        if ($dataLeitura < $trintaDiasAtras) {
            $tagsNaoLidas[$epc] = [
                'data' => $dataLeitura->format('Y-m-d H:i:s'), // Formata a data para string
                'company_id' => $info['company_id'],
            ];
        }
    }

    return view("leitura.lost", ['tagsNaoLidas' => $tagsNaoLidas]);
    }

    public function filter(Request $request){

        //data Inicio
        $data1 = $request->input('data');
        $time = $request->input('time');
        $data_begin=$data1 . ' ' .$time.':00';
        
        //data Fim
        $data2 = $request->input('data2');
        $time1 = $request->input('time1');
        $data_end=$data2 . ' ' .$time1.':00';

        //dd($data1 . ' ' .$time.':33');
        //dd($data2 . ' ' .$time1.':33');
        // $leituras= DB::table('leituras')->whereDate('created_at', '=', '2023-09-06 06:53:33')->get();
        //$leituras1  = leitura::select()->where('created_at', '=', $data1 . ' ' .$time.':33')->orderBy('created_at', 'desc')->get();
        $leituras1 = DB::table('leituras')->whereBetween('data', [$data_begin, $data_end])->get();
        
        
        return view("leitura.filter",['leituras1'=>$leituras1]);
        
    }



    public function show(leitura $leitura){

        if (Auth::check()) {
            $leituras2 = leitura::where('id', $leitura->id)->get();
            $leituras1 = leitura::where('EPC', $leituras2[0]->EPC)->orderBy('Data')->get();
        
            $ultimaLeitura = leitura::where('EPC', $leituras2[0]->EPC)->orderBy('Data', 'desc')->first();
            $ultimaLeitura->date = date( 'd/m/Y  H:i:s' , strtotime($ultimaLeitura->Data));
            $ultimaLeitura->item = Item::findOrFail(Tag::where('codigo', $ultimaLeitura->EPC)->first()->item_id);

            $days = 10;
            if (strtotime($ultimaLeitura->Data) <= strtotime('-' . $days . 'days')) {
                $ultimaLeitura->date = "Sem leitura nos últimos $days dias";
            }



            return view('leitura.show', ['leitura'=>$leitura,'leituras' => $leituras1, 'ultimaLeitura' => $ultimaLeitura]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }

    }
    public function enviarTag(Request $request)
    {
        $count = 0;

        foreach ($request->json() as $leitura1) {

            $leitura = new leitura;



            //A consulta está correta?;
            $lastPassage1 = leitura::select('tipo')->where('EPC', $leitura1["reading_epc_hex"])->max('Data');
            
            
            $lastPassage = DB::table('leituras')->select('tipo')->where('Data', $lastPassage1)->get();
           
            if ($lastPassage1 != NULL) {
               
                if ($lastPassage->get('0')->tipo == 'Saída' || $lastPassage->get('0')->tipo == NULL || NAN) {
                    $leitura->tipo = 'Entrada';
                    
                }
                if ($lastPassage->get('0')->tipo == 'Entrada') {
                    $leitura->tipo = 'Saída';
                    
                }
            }
            else{
                $leitura->tipo='Entrada';  
            }
           
            $leitura->EPC = $leitura1["reading_epc_hex"];
            $leitura->Data = $leitura1["reading_created_at"];
            $leitura->company_id = $leitura1["reading_company_id"];
            $count++;
            $leitura->save();
        }

        return response()->json([
            "message" => "leitura record created"
        ], 200);
    }

    public function index()
{
    if (Auth::check()) {
        $tags = Tag::orderBy('id')->get();
        $tagName = [];

        foreach ($tags as $t) {
            $tagLeitura = Leitura::where('EPC', $t->codigo)->first();
            if ($tagLeitura) {
                $tagName[$t->id] = $tagLeitura->id;
            }
        }

        $tagsCadastrads = Tag::count();
        $leituras1 = Leitura::select('leituras.*')
        ->join(DB::raw('(SELECT MAX(id) as id FROM leituras GROUP BY data, EPC) as latest'), 'leituras.id', '=', 'latest.id')
        ->orderBy('created_at', 'desc')
        ->get();

        $tagsLidas = Leitura::distinct('EPC')->get();
        $tagsLidas2 = leitura::distinct()->count('EPC');

        $tagsNaoLidas = leitura::select('EPC', 'Data')
        ->where('Data', '<', now()->subDays(10))
        ->orWhereNull('Data')
        ->orderBy('Data', 'desc')
        ->distinct('EPC')
        ->get()
        ->keyBy('EPC')
        ->map(function ($item) {
            return $item->Data;
        })
        ->toArray();
        return view('leitura.index', [
            'count' => $tagsCadastrads,
            'tagName' => $tagName,
            'tags' => $tags,
            'leituras' => $leituras1,
            'tagsLidas' => $tagsLidas,
            'tagsLidas2' => $tagsLidas2,
            'tagsNaoLidas' => $tagsNaoLidas,
        ]);
    } else {
        session()->flash('mensagem', 'Operação não permitida!');
        return redirect()->route('login');
    }
}

    public static function ExibirTag($epc)
    {
        if (Auth::check()) {
            $o = DB::table('tags')->select()->where('codigo', $epc)->get();

            return redirect()->route('tag.show', $o[0]->id);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
}
