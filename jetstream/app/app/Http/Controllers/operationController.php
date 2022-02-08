<?php

namespace App\Http\Controllers;

use App\Models\operation;
use Illuminate\Support\Facades\Auth;

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
            $operacaos = operation::orderBy('created_at')->get();
            return view('operation.index', ['operacaos' => $operacaos]);
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