
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
                <form action="{{ route('antena.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label>Código</label>
                                <input type="text" class="form-control" placeholder="Código"name="codigo"
                                    id="codigo"required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Local</label>
                                <input type="text" class="form-control" placeholder="Local" name="local" id="local"required>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-6">

                            
                        </div>
                        <div class="col-sm-6">

                            <div class="text-right">
                                <input type="submit" value="Cadastrar" class="btn btn-primary">
                                <input type="reset" value="Limpar" class="btn btn-danger">
                            </div>
                        </div>

                   
                </form>
            </div>

        </div>


    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop