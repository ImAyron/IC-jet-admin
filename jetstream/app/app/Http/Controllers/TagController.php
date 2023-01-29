<?php

namespace App\Http\Controllers;



use App\Models\Item;
use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
 
    public function index()
    {
        $tags = Tag::orderBy('codigo')->get();
        return view('tag.index', ['tags' => $tags]);
    }

    public function create() // method=post action=store
    {
        $this->authorize('is_admin');
        if (Auth::check()) {
            $items = Item::orderBy('descricao')->get();
            return view('tag.create', ['items' => $items]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        Tag::create($request->all()); 
        session()->flash('mensagem','Tag cadastrada com sucesso!');
        return redirect()->route('tag.index');
    }
 
    public function show(Tag $tag)
    { 
        return view('tag.show',['tag'=>$tag]);
    }

    
    public function count(){

        $count=Tag::all()->count();
        
        return $count;
    }
    

    public function edit(Tag $tag)
    {
        if (Auth::check()) {
            
            $items = Item::orderBy('descricao')->get();
            return view('tag.edit', [ 'tag'=>$tag, 'items'=>$items]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Tag $tag)
    {
        //dd($request->all());
        $tag->fill($request->all());
        $tag->save();

        session()->flash('mensagem', 'Tag atualizada com sucesso!');  
        return redirect()->route('tag.index');
    }

    public function destroy(Tag $tag)
    {
     #   if($tag->item->count() > 0){

      #      session()->flash('mensagem', 'Exclusão não permitida! Existem itens associadas.');
      #      return redirect()->route('tag.index');
      #  }else{

        $tag->delete();
        session()->flash('mensagem', 'Tag excluída com sucesso!');
        return redirect()->route('tag.index');
   
     #   }
    }
}
