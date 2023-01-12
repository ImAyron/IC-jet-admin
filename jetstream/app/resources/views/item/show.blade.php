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
                        <img class="profile-user-img img-fluid img-circle" src="/img/edredon.jpg" alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">Informações do Item</h3>
                    <p class="text-muted text-center">100% algodão</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Código</b> <a class="float-right text-info">{{ $item->codigo }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Descricão</b> <a class="float-right text-info "> {{ $item->descricao }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Data de fabricação</b> <a
                                class="float-right text-info">{{ date('d/m/Y', strtotime($item->dataFab)) }}</a>
                        </li>
                    </ul>
                   

                    <form name="frmDelete" action="{{ route('item.destroy', $item->id) }}" method="post"
                        onsubmit="return confirm('Confirma a exclusão do item?');">


                        @csrf
                        @method('DELETE')
                        <br>
                        <a style=' color:white;' href="{{ route('item.edit', $item->id) }}"> <input
                                class="btn btn-info" type="button" value="Editar"></a>
                        <a style=' color:white;' href="{{ route('item.index') }}"> <input class="btn btn-info"
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
        <script></script>
    @stop
