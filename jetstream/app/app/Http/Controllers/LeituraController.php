<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\leitura;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tag;

class LeituraController extends Controller
{
    public function show(leitura $leitura){

        if (Auth::check()) {
            $leituras2 = leitura::where('id', $leitura->id)->get();
            $leituras1 = leitura::where('EPC', $leituras2[0]->EPC)->orderBy('Data')->get();
            


            return view('leitura.show', ['leitura'=>$leitura,'leituras' => $leituras1]);
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
        if (Auth::check()) {;
           
            $tagsLidas = leitura::all()->unique('EPC');
           
            $tags=Tag::orderBy('id')->get();
            
            $tagsLidas2 = leitura::distinct()->count('EPC');

            foreach($tags as $t){
                
                $tagName[$t->id]=leitura::select()->Where('EPC',$t->codigo)->get();
                
            }
           
            $tagsCadastrads=Tag::orderBy('id')->count();
            $leituras1  = leitura::orderBy('created_at', 'desc')->get();
            return view('leitura.index', ['count'=>$tagsCadastrads,'tagName'=>$tagName,'tags'=>$tags,'leituras' => $leituras1, 'tagsLidas' => $tagsLidas, 'tagsLidas2' => $tagsLidas2]);
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
