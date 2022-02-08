
@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')

<form action="{{ route('antena.store')}}" method="post">
     @csrf

    <div class="form-group">
        <br>
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo" required>
    </div>

    <div class="form-group">
        <label for="local">Local</label>
        <input type="text" class="form-control" name="local" id="local"required>
    </div>
 
    <div class="text-right">
    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@stop

@section('css')

@stop

@section('js')

@stop