<?php

namespace App\Http\Controllers;

use App\Models\operation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class operationController extends Controller
{
    public function addOperation(Request $request) {

        operation::create($request->all());
        

        // Retornar
        return [$request->operations,
      $request->antena,$request->tipo];

    }
    public function index()
    {
        if (Auth::check()) {
            $teste= DB::table('operations')->select('operations','created_at')->where('tipo','Entrada')->distinct()->get();
            $teste2= DB::table('operations')->select('operations','created_at')->where('tipo','Saida')->distinct()->get();
            $maior= DB::table('operations')->max('created_at'); 
            $hor=DB::table('operations')->where('operations','A351409D')->max('created_at'); 
        ;
            $operacaos=DB::table('operations')->distinct('operations')->get();    
            ##$operacaos = operation::orderBy('created_at')->distinct()->get();
            return view('operation.index', ['operacaos' => $operacaos,'teste'=>$teste,'teste2'=>$teste2]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
      }

      public function show(operation $operacao)
      {
          
          return view('operation.show', ['operacao' => $operacao]);
      }
}