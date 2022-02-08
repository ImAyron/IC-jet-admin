@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')

<!-- Reload Página-->


<table class="table table-bordered table-hover table-striped table-sm table-responsive-sm">
    <caption>Ultimas leituras</caption>
    <thead class="thead-dark">
   
        <tr>
            <th scope="col">Tag</th>
            <th scope="col">Data</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Local</th>
            <th scope="col">Tipo</th>
          




        </tr>
    </thead>
    <tbody>

        @foreach($operacaos as $o)
        <tr>
            <td>{{ $o->operations }}</td>
            <td>{{ $o->created_at }}</td>
            <td>{{ $o->funcionario }}</td>
            <td>{{ $o->antena }}</td>
            <td>{{ $o->tipo }} </td>
         
        </tr>
        @endforeach
    </tbody>
</table>

<div class="text-center">
    <a href="{{ route('operacao.create')}}" class="btn btn-lg btn-primary">Cadastrar</a>
</div>



@stop

@section('css')
<meta http-equiv='refresh' content='5'>
@stop

@section('js')

@stop