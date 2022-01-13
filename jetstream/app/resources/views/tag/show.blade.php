@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')

<h1>Dados da tag</h1>
<p>Id: {{$tag->id}}</p>
<p>Código: {{$tag->codigo}}</p>
<p>Data de fabricação: {{$tag->dataFab}}</p>

<p>Id do item associado: {{$tag->item->id}}</p>

<p>Nome do item associado: {{$tag->item->codigo}}</p>


<div style="text-align: center">
   

  
    <form name="frmDelete" action="{{ route('tag.destroy', $tag->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão da tag?');">


        @csrf
        @method('DELETE')
        <a href="{{route('tag.edit', $tag->id)}}"><input class='btn btn-secondary'type="button" value="Editar"></a>
        <a href="{{route('tag.index')}}"><input class='btn btn-secondary' type="button" value="Voltar"></a>
        <input type="submit" value="Excluir">



</div>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop