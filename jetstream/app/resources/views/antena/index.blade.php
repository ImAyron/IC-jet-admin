@extends('principal')

@section('conteudo')

     <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de antenas
    

        </caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Local</th>
            <th scope="col">Exibir</th>

        </tr>
    </thead>
    <tbody>

        @foreach($antenas as $a)
            <tr>
                <td>{{ $a->id}}</td>
                <td>{{ $a->codigo }}</td>
                <td>{{ $a->local }} </td>
                <td><a href="{{route('antena.show', $a->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

