@extends('principal')

@section('conteudo')

    <form action="{{ route('operacao.store') }}" method="post">
        @csrf
        <?php $date = '2020-05-12T08:30';
        // Or how you fetch the records?
        ?>


   {{--   <div class="form-group">
            <label for="data_hora'">Data</label>
            <input type="datetime-local" class="form-control" name="data_hora'" id="data_hora'"
                value="<?php echo $date; ?>" />
        </div>
   --}}
        <div class="form-group">
            <label for="antena_id">Antena</label>
            <select name="antena_id" id="antena_id" class="form-control">

                @foreach ($antenas as $a)
                    <option value="{{ $a->id }}">{{ $a->local }}</option>
                @endforeach


            </select>
        </div>

        <div class="form-group">
            <label for="funcionario_id">Funcionario</label>
            <select name="funcionario_id" id="funcionario_id" class="form-control">

                @foreach ($funcionarios as $f)
                    <option value="{{ $f->id }}">{{ $f->nome }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="tag_id">Tag</label>
            <select name="tag_id" id="tag_id" class="form-control">

                @foreach ($tags as $t)
                    <option value="{{ $t->id }}">{{ $t->codigo }}</option>
                @endforeach

            </select>
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>
    </form>

@endsection('conteudo')
