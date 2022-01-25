
@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')


<form action="{{route('antena.update', $antena->id)}}" method="post">
     @csrf
     @method('PUT')
    <div class="form-group">
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{$antena->codigo}}">
    </div>

    <div class="form-group">
        <label for="local">Descrição</label>
        <input type="text" class="form-control" name="local" id="local" value="{{$antena->local}}">
    </div>

    
    <div class="text-right">
    <input type="submit" value="Atualizar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@stop

@section('css')

@stop

@section('js')

@stop