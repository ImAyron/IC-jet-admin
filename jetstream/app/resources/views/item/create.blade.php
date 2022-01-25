@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')

<div class="container">
<div class="rol">
    <div class="col">

    </div>
    <div class="col">
    <form action="{{ route('item.store')}}" method="post">
     @csrf

    <div class="form-group">
        <br>
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="form-group">
        <label for="dataFab">Data de fabricação:</label>
        <input type="date" class="form-control" name="dataFab" id="dataFab">
    </div>

 
    <div class="text-right">
    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
    </form>
    </div>
    <div class="col">
        
    </div>

</div>
</div>

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