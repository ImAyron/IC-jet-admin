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
            $teste= DB::table('operations')->select('operations')->where('tipo','Entrada')->distinct()->get();
            $maior= DB::table('operations')->max('created_at'); 
            $hor=DB::table('operations')->where('operations','A351409D')->max('created_at'); 
            //$teste1=DB::table('operations')->select('tipo',DB::raw('MAX(created_at) as last_entrada'))->groupBy('operations');
            print_r($hor);
           
            $operacaos = operation::orderBy('created_at')->get();
            return view('operation.index', ['operacaos' => $operacaos,'teste'=>$teste]);
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