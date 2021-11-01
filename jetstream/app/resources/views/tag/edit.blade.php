@extends('principal')

@section('conteudo')

<form action="{{route('tag.update', $tag->id)}}" method="post">
     @csrf
     @method('PUT')
    <div class="form-group">
    <label for="codigo">Código</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{$tag->codigo}}">
    </div>

    <div class="form-group">
        <label for="dataFab">Data de fabricação:</label>
        <input type="date" class="form-control" name="dataFab" id="dataFab" value="{{$item->dataFab}}">
    </div>

    <div class="form-group">
        <label for="item_id">Item associado:</label>
        <select name="item_id" id="item_id" class="form-control">

            @foreach ($items as $i)
            <option value="{{$i->id}}">{{$i->codigo - $i->descricao}}</option>
            @endforeach
    

        </select>
    </div>


    <div class="text-right">
    <input type="submit" value="Atualizar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')