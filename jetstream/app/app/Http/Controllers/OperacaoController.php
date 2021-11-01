<?php

namespace App\Http\Controllers;

use App\Models\Operacao;
use App\Models\Funcionario;
use App\Models\Item;
use App\Models\Antena;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperacaoController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $operacaos = Operacao::orderBy('data_hora')->get();
            return view('operacao.index', ['operacaos' => $operacaos]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            $tags = Tag::orderBy('codigo')->get();
            $funcionarios = Funcionario::orderBy('nome')->get();
            $antenas = Antena::orderBy('codigo')->get();
            return view('operacao.create', ['tags' => $tags, 'funcionarios' => $funcionarios , 'antenas' => $antenas]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Operacao::create($request->all());
            session()->flash('mensagem', 'Operação cadastrada com sucesso!');
            return redirect()->route('operacao.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function show(Operacao $operacao)
    {
        return view('operacao.show', ['operacao' => $operacao]);
    }

    public function edit(Operacao $operacao)
    {
        if (Auth::check()) {
            $tags = Tag::orderBy('codigo')->get();
            $funcionarios = Funcionario::orderBy('nome')->get();
            $antenas = Antena::orderBy('codigo')->get();
            return view('operacao.edit', ['operacao' => $operacao, 'tags' => $tags, 'funcionarios' => $funcionarios , 'antenas' => $antenas]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Operacao $operacao)
    {
        if (Auth::check()) {
            $operacao->fill($request->all());
            //dd($registro->datalimite->format('Y-m-d'));
            $operacao->save();

            session()->flash('mensagem', 'Operação atualizada com sucesso!');
            return redirect()->route('operacao.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function destroy(Operacao $operacao)
    {

        if (Auth::check()) {
            $operacao->delete();
            session()->flash('mensagem', 'Operação excluída com sucesso!');
            return redirect()->route('operacao.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
}
