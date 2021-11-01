@extends('principal')

@section('conteudo')

<form action="{{ route('antena.store')}}" method="post">
     @csrf

    <div class="form-group">
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo">
    </div>

    <div class="form-group">
        <label for="local">Local</label>
        <input type="text" class="form-control" name="local" id="local">
    </div>
 
    <div class="text-right">
    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')