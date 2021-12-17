@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')    
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Ultimas leituras</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">Id</th> 
            <th scope="col">Data</th> 
            <th scope="col">Funcionario</th> 
            <th scope="col">Tipo</th>
            <th>Exibir</th>

              
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($operacaos as $o)
            <tr>
                <td>{{ $o->id }}</td>   
                <td>{{ $o->created_at }}</td>                   
                <td>{{ $o->funcionario->name }} </td>
                <td>{{ $o->tipo }} </td>
                <td><a href="{{route('operacao.show', $o->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>

    <div class="text-center">
    <a href="{{ route('operacao.create')}}" class="btn btn-lg btn-primary">Cadastrar</a>
    </div>



@stop

@section('css')

@stop

@section('js')

@stop