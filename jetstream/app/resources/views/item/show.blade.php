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
           <table class="table table-bordered table-hover table-striped table-sm table-dark">
            
           <img src="/img/edredon.jpg" height="50%" width="50%"  alt="">
           <img src="/img/local.jpg" height="50%" width="50%"  alt="">
           <tr>
                <th><p>ID: {{ $item->id}}</p></th>
            </tr>
            <tr>
                <th><p><p>Código: {{ $item->codigo }}</p></p></th>
            </tr>
            <tr>
                <th><p><p>Descricão: {{$item->descricao}}</p></p></th>
            </tr>
            <tr>
                <th><p><p><p>Data de fabricação: {{$item->dataFab}}</p></p></p></th>
            </tr>
           </table>
        </div>
        <div class="col">

        </div>
    </div>
</div>






<div style="text-align: center">
    <button class="btn-danger">
    <a href="{{route('item.edit', $item->id)}}">Editar</a>
    </button>

    <button class="btn-primary">
    <a href= "{{route('item.index')}}">Voltar</a>
    </button>


<form name="frmDelete"
    action="{{ route('item.destroy', $item->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do item?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">


</form>
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
