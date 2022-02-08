@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')


<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col-8">


           
            <div style="text-align: center">
            <img src="/img/antena.jpg" class="img-fluid" alt="">

                <h2 class="text-center">Informações da Antena</h2>
                <br>
                <p>ID: {{ $antena->id}}</p>


                <p>
                <p>Código: {{ $antena->codigo }}</p>
                </p>


                <p>
                <p>Local: {{$antena->local}}</p>
                </p>


                <form name="frmDelete" action="{{ route('antena.destroy', $antena->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão da antena?');">
                    <a href="{{route('antena.edit', $antena->id)}}"><input class="btn btn-secondary" type="button" value="Editar"></a>
                    <a href="{{route('antena.index')}}"><input class="btn btn-secondary" type="button" value="Voltar"></a>
                    @csrf
                    @method('DELETE')
                    <input class='btn btn-danger' type="submit" value="Excluir">
                </form>
            </div>

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