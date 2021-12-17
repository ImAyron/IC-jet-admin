@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')    

    <form action="{{ route('operacao.store') }}" method="post">
        @csrf
       
 
        <div class="form-group">
            <label for="antena_id">Antena</label>
            <select name="antena_id" id="antena_id" class="form-control">

                @foreach ($antenas as $a)
                    <option value="{{ $a->id }}">{{ $a->local }}</option>
                @endforeach


            </select>
        </div>

        <div class="form-group">
            <label for="user_id">Funcionario</label>
            <select name="user_id" id="user_id" class="form-control">

                @foreach ($funcionarios as $f)
                    <option value="{{ $f->id }}">{{ $f->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="tag_id">Tag</label>
            <select name="tag_id" id="tag_id" class="form-control">

                @foreach ($tags as $t)
                    <option value="{{ $t->id }}">{{ $t->codigo }}</option>
                @endforeach

            </select>
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
