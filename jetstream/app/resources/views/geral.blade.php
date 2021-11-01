@extends('principal')

@section('conteudo')

    
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Lista de operações</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">Id</th> 
            <th scope="col">Data</th> 
            <th scope="col">Funcionario</th> 
            <th scope="col">Tipo</th>
      

              
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($operacaos as $o)
            <tr>
                <td>{{ $o->id }}</td>   
                <td>{{ $o->data_hora }}</td>                   
                <td>{{ $o->funcionario->nome }} </td>
                <td>{{ $o->tipo }} </td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

