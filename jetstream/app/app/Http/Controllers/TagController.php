<?php

namespace App\Http\Controllers;



use App\Models\Item;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
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
    
    public function cadastroAutomatico(Request $request){
        foreach ($request->json() as $leitura1) {
         //se a tag não existir no sistema cadastra automatico   
         
         if(DB::table('tags')->where('codigo', $leitura1["reading_epc_hex"])->count() == 0) {     
             
            $leitura = new Tag;
            $leitura->codigo = $leitura1["reading_epc_hex"];
            $leitura->item_id= 35;       
            $leitura->dataFab = $leitura1["reading_created_at"];
            $leitura->save();}
        }

        return response()->json([
            "message" => "leitura record created"
        ], 200);
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
       
        $tag->fill($request->all());
        $tag->save();

        session()->flash('mensagem', 'Tag atualizada com sucesso!');  
        return redirect()->route('tag.index');
    }

    public function destroy(Tag $tag)
    {

        $tag->delete();
        session()->flash('mensagem', 'Tag excluída com sucesso!');
        return redirect()->route('tag.index');
   
   
    }
}
