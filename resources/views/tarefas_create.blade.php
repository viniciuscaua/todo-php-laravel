@extends('master')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tasks.css') }}">

<h2>Criar tarefa</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action=" {{ route('tarefas.store')}} " method="post">
    @csrf
    <input type="text" name="titulo" placeholder="Digite o titulo da tarefa">
    <textarea type="text" name="descricao" placeholder="Digite a descrição da tarefa"></textarea>
    <button type="submit">Adicionar</button>
</form>

@endsection