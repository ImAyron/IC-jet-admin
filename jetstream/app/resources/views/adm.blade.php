@extends('principal')

@section('conteudo')
        
    
        <a href="{{ route('operacao.create')}}">
            <p>Cadastro de operacao</p>
        </a>

        <a href="{{ route('operacao.index')}}">
            <p>Controle de operações</p>
        </a>

        <a href="{{ route('item.index')}}">
            <p>Relatório de item</p>
        </a>

        <a href="{{ route('item.create')}}">
            <p>Cadastro de itens</p>
        </a>

        <a href="{{ route('funcionario.index')}}">
            <p>Relatório de funcionários</p>
        </a>

        <a href="{{ route('funcionario.create')}}">
            <p>Cadastro de funcionários</p>
        </a>
              
        <a href="{{ route('antena.index')}}">
            <p>Relatório de antenas</p>
        </a>

        <a href="{{ route('antena.create')}}">
            <p>Cadastro de antenas</p>
        </a>

        <a href="{{ route('tag.index')}}">
            <p>Relatório de tags</p>
        </a>

        <a href="{{ route('tag.create')}}">
            <p>Cadastro de tags</p>
        </a>

   
@endsection
