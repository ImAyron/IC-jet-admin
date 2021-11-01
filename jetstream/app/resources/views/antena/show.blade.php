@extends('principal')

@section ('conteudo')

<h1>Dados da antena</h1>

<p>ID: {{ $antena->id}}</p>
<p>Código: {{ $antena->codigo }}</p>
<p>Local: {{$antena->local}}</p>


<div style="text-align: center">
    <a href="{{route('antena.edit', $antena->id)}}">Editar</a>

<a href= "{{route('antena.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('antena.destroy', $antena->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão da antena?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">


</form>
</div>



@endsection