<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Minha Lista de Tarefas</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('tarefas.index') }}">Tarefas</a></li>
                    <li><a href="{{ route('tarefas.create') }}">Adicionar Nova Tarefa</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy; {{ date('Y') }} - Vinicius Cauã - Aplicação de Tarefas</p>
        </footer>
    </div>
</body>
</html>