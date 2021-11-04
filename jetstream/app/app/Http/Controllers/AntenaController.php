<?php

namespace App\Http\Controllers;




use App\Models\Antena;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntenaController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $antenas = Antena::orderBy('codigo')->get();
            return view('antena.index', ['antenas' => $antenas]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }


    public function create()
    {
        if (Auth::check()) {

            return view('antena.create');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
       

        if (Auth::check()) {
            Antena::create($request->all());
            session()->flash('mensagem', 'Antena cadastrada com sucesso!');
            return redirect()->route('antena.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function show(Antena $antena)
    {
        if (Auth::check()) {
            return view('antena.show', ['antena' => $antena]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function edit(Antena $antena)
    {
        if (Auth::check()) {
            return view('antena.edit', ['antena' => $antena]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }


    public function update(Request $request, Antena $antena)
    {
        if (Auth::check()) {
            $antena->fill($request->all());
            $antena->save();
            session()->flash('mensagem', 'Antena atualizada com sucesso!');
            return redirect()->route('antena.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function destroy(Antena $antena)
    {
        if (Auth::check()) {
                $antena>delete();
                session()->flash('mensagem', 'Antena excluída com sucesso!');
                return redirect()->route('antena.index');
            }
           
         else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
    
}