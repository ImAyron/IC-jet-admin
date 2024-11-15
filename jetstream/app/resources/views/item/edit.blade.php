@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')
<div class="container">
    <p></p>
        <!--Formulario Admin-->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Cadastro Item</h3>
            </div>

            <div class="card-body">
                <form action="{{route('item.update', $item->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label>Código</label>
                                <input type="text" class="form-control" placeholder="Enter ..."name="codigo"
                                    id="codigo" value="{{$item->codigo}}"required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="descricao" id="descricao"  value="{{$item->descricao}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label>Data de fabricação</label>
                                <input type="date" class="form-control" name="dataFab" id="dataFab" value="{{$item->dataFab}}" required>
                            </div>
                            
                        </div>
                      <div class="col-sm-6">

                        
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">

                            
                        </div>
                        <div class="col-sm-6">

                            <div class="text-right">
                                <input type="submit" value="Atualizar" class="btn btn-primary">
                                <input type="reset" value="Limpar" class="btn btn-danger">
                            </div>
                        </div>

                   
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
