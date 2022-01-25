@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')


<div class="container">
    <div class="row">


        <div class="col-6">
            <br>

            <img src="/img/edredon.jpg" class="img-fluid" alt="">


        </div>

        <div class="col text-center">
            <br>
            <h2 class="text-center">Informações do Item</h2>

            <p> <b>ID:</b> {{ $item->id}}</p>
            <p> <b>Código:</b> {{ $item->codigo }}</p>
            <p> <b>Descricão:</b> {{$item->descricao}}</p>
            <p> <b>Data de fabricação:</b> {{$item->dataFab}}</p>

            <div style=" color:white;">


                <form name="frmDelete" action="{{ route('item.destroy', $item->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do item?');">


                    @csrf
                    @method('DELETE')
                    <br>
                    <a style=' color:white;' href="{{route('item.edit', $item->id)}}"> <input class="btn btn-secondary" type="button" value="Editar"></a>
                    <a style=' color:white;' href="{{route('item.index')}}"> <input class="btn btn-secondary" type="button" value="Voltar"></a>

                    <input class='btn btn-danger' type="submit" value="Excluir">


                </form>
            </div>
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