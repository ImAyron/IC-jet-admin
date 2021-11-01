@extends('principal')

@section ('conteudo')

<h1>Dados do item</h1>

<p>ID: {{ $item->id}}</p>
<p>Código: {{ $item->codigo }}</p>
<p>Descricão: {{$item->descricao}}</p>
<p>Data de fabricação: {{$item->dataFab}}</p>


<div style="text-align: center">
    <a href="{{route('item.edit', $item->id)}}">Editar</a>

<a href= "{{route('item.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('item.destroy', $item->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do item?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">


</form>
</div>



@endsection