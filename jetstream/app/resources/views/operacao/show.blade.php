@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop
@section('content')  
<h1>Dados da operação</h1>
<p>Id: {{$operacao->id}}</p>
<p>Data: {{$operacao->data_hora}}</p>
<p>Item: {{$operacao->tag->item->descricao}}</p>
<p>Funcionario: {{$operacao->funcionario->nome}}</p>
<p>Local: {{$operacao->antena->local}}</p>
<p>Tipo: {{$operacao->tipo}}</p>

<div style="text-align: center">

    <a href= "{{route('operacao.index')}}">Voltar</a>
   
</div>



@stop

@section('css')

@stop

@section('js')

@stop
