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
                        <img class="profile-user-img img-fluid img-circle" src="/img/Gestmi_Logo.png" alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">Dados da tag</h3>
                    <p class="text-muted text-center">Faixa de Frequência 955 Hertzs</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>ID</b> <a class="float-right text-info">{{  $tag->id }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Código</b> <a href="{{ route('leitura.show', $tag->codigo) }}" class="float-right text-info "> {{ $tag->codigo  }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Descrição do Item Associado - ID</b> <a class="float-right text-info " href="{{ route('item.show', $tag->item->id) }}"> {{ $tag->item->id ." - ".  $tag->item->descricao }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Data de fabricação</b> <a class="float-right text-info "> {{  $tag->dataFab }}</a>
                        </li>

                    </ul>


                    <form name="frmDelete" action="{{route('tag.destroy', $tag->id)  }}" method="post"
                        onsubmit="return confirm('Confirma a exclusão da Tag?');">


                        @csrf
                        @method('DELETE')
                        <br>
                        <a style=' color:white;' href="{{ route('tag.edit', $tag->codigo)}}"> <input class="btn btn-info"
                                type="button" value="Editar"></a>
                        <a style=' color:white;' href="{{route('tag.index') }}"> <input class="btn btn-info"
                                type="button" value="Voltar"></a>

                        <input class='btn btn-danger' type="submit" value="Excluir">


                    </form>
                </div>

            </div>
        </div>
        <div class="col">

        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
