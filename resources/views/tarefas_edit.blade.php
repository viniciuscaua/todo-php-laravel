@extends('master')

@section('title', 'Editar Tarefa')

<link rel="stylesheet" href="{{ asset('assets/css/tasks.css') }}">

@section('content')
    <h2>Editar Tarefa</h2>

    @if(session()->has('message'))
        <p>{{ session()->get('message') }}</p>
    @endif

    <form action="{{ route('tarefas.update', ['tarefa' => $tarefa->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $tarefa->titulo }}">

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao">{{ $tarefa->descricao }}</textarea>

        <label>
            <input type="checkbox" name="concluida" value="1" {{ $tarefa->concluida ? 'checked' : '' }}>
            Concluída
        </label>

        <button type="submit">Atualizar</button>
    </form>
@endsection
