

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
            
           <img src="/img/antena.jpg" height="50%" width="50%"  alt="">
           <img src="/img/local.jpg" height="50%" width="50%"  alt="">
           <tr>
                <th><p>ID: {{ $antena->id}}</p></th>
            </tr>
            <tr>
                <th><p><p>Código: {{ $antena->codigo }}</p></p></th>
            </tr>
            <tr>
                <th><p><p>Local: {{$antena->local}}</p></p></th>
            </tr>
           
           </table>
        </div>
        <div class="col">

        </div>
    </div>
</div>





<div style="text-align: center">
    <a href="{{route('antena.edit', $antena->id)}}">Editar</a>

<a href= "{{route('antena.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('antena.destroy', $antena->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão da antena?');">


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
