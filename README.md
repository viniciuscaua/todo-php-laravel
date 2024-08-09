# Lista de Tarefas (TODO List)

Este projeto é uma aplicação de lista de tarefas (TODO list) desenvolvida usando o framework Laravel com PostgreSQL como banco de dados. A aplicação permite aos usuários adicionar, visualizar, editar, excluir e marcar tarefas como concluídas.

## Requisitos

Verifique se você tem os seguintes pré-requisitos instalados:

- PHP (versão 8.0 ou superior)
- Composer
- PostgreSQL
- Laravel (versão 11 ou superior)

## Configuração do Projeto

### 1. Clonar o Repositório

Clone o repositório para o seu ambiente local:

```bash
git clone https://github.com/viniciuscaua/todo-php-laravel.git
cd seu-repositorio
```

### 2. Configurar o Ambiente

Edite o arquivo .env para configurar o banco de dados PostgreSQL

### 3. Instalar Dependências

Instale as dependências do projeto usando o Composer:

```bash
composer install
```
### 4. Gerar a Chave de Aplicação

Gere a chave de aplicação do Laravel:

```bash
php artisan key:generate
```

### 5. Criar as Tabelas no Banco de Dados

Execute as migrações para criar as tabelas necessárias no banco de dados:

```bash
php artisan migrate
```

### 6. Iniciar o Servidor

Inicie o servidor do Laravel:

```bash
php artisan serve
```

## Estrutura do Projeto

### 1. Modelos

- **Tarefa**: Modelo que representa uma tarefa na aplicação. Inclui os seguintes atributos:
  - `id`: Identificador único da tarefa.
  - `titulo`: Título da tarefa.
  - `descricao`: Descrição detalhada da tarefa.
  - `concluida`: Status da tarefa (concluída ou não).
  - `created_at`: Data e hora de criação da tarefa.
  - `updated_at`: Data e hora da última atualização da tarefa.

### 2. Controladores

- **TarefasController**: Controlador responsável por gerenciar as tarefas. Inclui métodos para:
  - Exibir a lista de tarefas.
  - Criar novas tarefas.
  - Armazenar tarefas no banco de dados.
  - Editar tarefas existentes.
  - Atualizar tarefas no banco de dados.
  - Excluir tarefas.

### 3. Rotas

- **Web Routes**: As rotas são definidas no arquivo `routes/web.php`. Incluem rotas para:
  - Exibir a lista de tarefas.
  - Criar novas tarefas.
  - Atualizar tarefas existentes.
  - Excluir tarefas.

### 4. Views

- **Blade Templates**: Utiliza o motor de templates Blade para renderizar as páginas da aplicação. Inclui:
  - Página para listar tarefas.
  - Página para criar novas tarefas.
  - Página para editar tarefas.
  - Exibição de mensagens de sucesso ou erro.

## Decisões Técnicas
  
- **Banco de Dados**: PostgreSQL foi selecionado pela minha experiência com o SGBD.

- **Validações**: Validações foram implementadas para garantir a integridade dos dados inseridos pelo usuário, com mensagens personalizadas para erros.

- **Interface de Usuário**: Utilizei CSS básico para estilizar a aplicação e criar um layout mais organizado e responsivo.

## Desafios Enfrentados

- **Configuração do Ambiente**: Configurar o PostgreSQL e garantir que o Laravel se conectasse corretamente ao banco de dados foi um desafio inicial.

- **Validações e Erros**: Garantir que as validações funcionassem corretamente e que as mensagens de erro fossem exibidas de forma apropriada exigiu tempo.

- **Marcar Tarefas como Concluídas**: Implementar a funcionalidade para marcar tarefas como concluídas e garantir que a interface refletisse essas alterações corretamente foi um desafio.

