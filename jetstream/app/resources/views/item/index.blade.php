@extends('principal')

@section('conteudo')

     <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de Itens</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data de fabricação</th>
            <th scope="col">Exibir</th>

        </tr>
    </thead>
    <tbody>

        @foreach($items as $i)
            <tr>
                <td>{{ $i->id}}</td>
                <td>{{ $i->codigo }}</td>
                <td>{{ $i->descricao }} </td>
                <td>{{ $i->dataFab }} </td>
                <td><a href="{{route('item.show', $i->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

