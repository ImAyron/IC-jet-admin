@extends('principal')

@section ('conteudo')

<h1>Dados da tag</h1>
<p>Id: {{$tag->id}}</p>
<p>Código: {{$tag->codigo}}</p>
<p>Data de fabricação: {{$tag->dataFab}}</p>

<p>Id do item associado: {{$tag->item->id}}</p>

<p>Nome do item associado: {{$tag->item->codigo}}</p>


<div style="text-align: center">
    <a href="{{route('tag.edit', $tag->id)}}">Editar</a>

    <a href= "{{route('tag.index')}}">Voltar</a>
    <form name="frmDelete"
    action="{{ route('tag.destroy', $tag->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão da tag?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">

<div style="text-align: center">

    <a href= "{{route('tag.index')}}">Voltar</a>
   
</div>



@endsection