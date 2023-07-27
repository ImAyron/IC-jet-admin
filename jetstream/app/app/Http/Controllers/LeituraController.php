<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\leitura;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LeituraController extends Controller
{
    public function enviarTag(Request $request)
    {
        $count = 0;

        foreach ($request->json() as $leitura1) {

            $leitura = new leitura;



            //A consulta está correta?;
            $lastPassage1 = leitura::select('tipo')->where('EPC', $leitura1["reading_epc_hex"])->max('created_at');
            
            
            $lastPassage = DB::table('leituras')->select('tipo')->where('created_at', $lastPassage1)->get();
           
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
            $lavanderia = leitura::where('company_id', 'Lavanderia')->distinct('EPC')->count();
            $tagsLidas = leitura::select('EPC')->distinct()->get();
            $tagsLidas2 = leitura::distinct()->count('EPC');

            $leituras1  = leitura::orderBy('created_at', 'desc')->get();
            return view('leitura.index', ['leituras' => $leituras1, 'lavanderia' => $lavanderia, 'tagsLidas' => $tagsLidas, 'tagsLidas2' => $tagsLidas2]);
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
