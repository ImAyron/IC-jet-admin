
@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')

<form action="{{ route('tag.store')}}" method="post">
     @csrf

    <div class="form-group">
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo">
    </div>

    <div class="form-group">
        <label for="item_id">Item</label>
        <select name="item_id" id="item_id" class="form-control">

            @foreach ($items as $i)
            <option value="{{$i->id}}">{{$i->codigo}} - {{$i->descricao}}</option>
            @endforeach
    

        </select>
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