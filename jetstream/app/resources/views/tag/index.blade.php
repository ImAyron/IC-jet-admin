@extends('principal')

@section('conteudo')
    
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tags ativas</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">Id</th> 
            <th scope="col">Código</th> 
            <th scope="col">Data de fabricação</th> 
            <th scope="col">Id do item associado</th>
            <th>Exibir</th>

              
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($tags as $t)
            <tr>
                <td>{{ $t->id }}</td>   
                <td>{{ $t->codigo }}</td>                   
                <td>{{ $t->dataFab }} </td>
                <td>{{ $t->item_id }} </td>
                <td><a href="{{route('tag.show', $t->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>

    <div class="text-center">
    <a href="{{ route('tag.create')}}" class="btn btn-lg btn-primary">Cadastrar</a>
    </div>


@endsection

