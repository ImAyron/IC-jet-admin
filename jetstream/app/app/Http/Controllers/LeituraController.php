<?php

namespace App\Http\Controllers;
use App\Models\leitura;
use Illuminate\Http\Request;

class LeituraController extends Controller
{
    public function enviarTag(Request $request){


       
        
        foreach ($request->json() as $leitura1){
       
        $leitura = new leitura;
        $leitura->EPC = $leitura1["reading_epc_hex"];
        $leitura->Data = $leitura1["reading_created_at"];
        $leitura->company_id=$leitura1["reading_company_id"];

        $leitura->save();
        }
        
        
     
    
    
        return response()->json([
            "message" => "leitura record created"
        ], 200);
    }
}
