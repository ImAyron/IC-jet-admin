<?php

namespace App\Http\Controllers;


use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        if (Auth::check()) {

            $items = Item::orderBy('codigo')->get();
            return view('item.index', ['items' => $items]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function count(){

        $count=Item::all()->count();
        
        return $count;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('is_admin');
        
        if (Auth::check()) {

            return view('item.create');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
    


    public function store(Request $request)
    {


        if (Auth::check()) {
            Item::create($request->all());
            session()->flash('mensagem', 'Item cadastrado com sucesso!');
            return redirect()->route('item.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function show(Item $item)
    {
        if (Auth::check()) {
            return view('item.show', ['item' => $item]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function edit(Item $item)
    {
        if (Auth::check()) {
            return view('item.edit', ['item' => $item]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }


    public function update(Request $request, Item $item)
    {
        if (Auth::check()) {
            $item->fill($request->all());
            $item->save();
            session()->flash('mensagem', 'Item atualizado com sucesso!');
            return redirect()->route('item.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function destroy(Item $item)
    {
        if (Auth::check()) {
                $item->delete();
                session()->flash('mensagem', 'Item excluído com sucesso!');
                return redirect()->route('item.index');
            }
           
         else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
}