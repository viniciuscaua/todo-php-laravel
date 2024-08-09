@extends('master')

@section('title', 'Lista de Tarefas')

@section('content')
    <h2>Lista de Tarefas</h2>

    <ul>
        @foreach ($tarefas as $tarefa)
            <li>
                <strong>{{ $tarefa->titulo }}</strong> - {{ $tarefa->descricao }}
                <div>
                    <form action="{{ route('tarefas.update', ['tarefa' => $tarefa->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="titulo" value="{{ $tarefa->titulo }}">
                        <input type="hidden" name="descricao" value="{{ $tarefa->descricao }}">
                        <input type="hidden" name="concluida" value="0">
                        <label>
                            <input type="checkbox" name="concluida" value="1" {{ $tarefa->concluida ? 'checked' : '' }} onchange="this.form.submit();">
                            Concluída
                        </label>
                    </form>
                    
                    <a href="{{ route('tarefas.edit', ['tarefa' => $tarefa->id]) }}" class="button-edit">Editar</a>
                    
                    <form action="{{ route('tarefas.destroy', ['tarefa' => $tarefa->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
