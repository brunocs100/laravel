@extends('layouts.app')

@section('content')
    <h1>Nova Tarefa</h1>
    <form action="{{ route('event.store') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder='Titulo'><br>
        <input type="text" alt='99,99' name="valor" placeholder='Valor'><br>
        <input type="text" name="ativo" placeholder='Ativo'><br>
     
       
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="@base_url">Voltar para a Lista de Tarefas</a>

    <h1>Editar Tarefa</h1>
    <form action="{{ route('event.edit') }}" method="POST">
        @csrf
        <input type="text" value="{{ $produto->titulo }}" name="titulo" placeholder='Titulo'><br>
        <input type="text" value="{{ $produto->valor }}"alt='99,99' name="valor" placeholder='Valor'><br>
        <input type="text" value="{{ $produto->ativo }}" name="ativo" placeholder='Ativo'><br>
     
       
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="@base_url">Voltar para a Lista de Tarefas</a>
@endsection