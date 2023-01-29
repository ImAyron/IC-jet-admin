@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop


@section('content')



    <div class="row">

        <div class="col">

        </div>
        <div class="col-8">
            <P></P>
            <div class="card card-info card-outline">
                <div class="card-body box-profile card-responsive-sm">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="/img/antena.jpg" alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">Informações da Antena</h3>
                    <p class="text-muted text-center">Faixa de Frequência 955 Hertzs</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>ID</b> <a class="float-right text-info">{{ $antena->id }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Local</b> <a class="float-right text-info "> {{ $antena->local }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Código</b> <a class="float-right text-info "> {{ $antena->codigo }}</a>
                        </li>

                    </ul>


                    <form name="frmDelete" action="{{ route('antena.destroy', $antena->id) }}" method="post"
                        onsubmit="return confirm('Confirma a exclusão da antena?');">


                        @csrf
                        @method('DELETE')
                        <br>
                        <a style=' color:white;' href="{{ route('antena.edit', $antena->id) }}"> <input class="btn btn-info"
                                type="button" value="Editar"></a>
                        <a style=' color:white;' href="{{ route('antena.index') }}"> <input class="btn btn-info"
                                type="button" value="Voltar"></a>

                        <input class='btn btn-danger' type="submit" value="Excluir">


                    </form>
                </div>

            </div>
        </div>
        <div class="col">

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
