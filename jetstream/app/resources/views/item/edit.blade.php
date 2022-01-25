@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')

<form action="{{route('item.update', $item->id)}}" method="post">
     @csrf
     @method('PUT')
    <div class="form-group">
        <br>
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{$item->codigo}}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{$item->descricao}}">
    </div>

    <div class="form-group">
        <label for="dataFab">Data de fabricação:</label>
        <input type="date" class="form-control" name="dataFab" id="dataFab" value="{{$item->dataFab}}">
    </div>


    <div class="text-right">
    <input type="submit" value="Atualizar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@csrf
        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
        <script>
          console.log('Hi!');
        </script>
        @stop
