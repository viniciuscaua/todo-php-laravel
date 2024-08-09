<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{

    public readonly Tarefa $tarefa;

    // Construtor
    public function __construct()
    {
        $this->tarefa = new Tarefa();
    }

    public function index()
    {
        $tarefas= $this->tarefa->all();
        return view('tarefas', ['tarefas' => $tarefas]);
    }

    public function create()
    {
        return view('tarefas_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'nullable|max:1000',
        ], [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.max' => 'O título deve ter menos de 255 caracteres.',
            'descricao.max' => 'A descrição deve ter menos de 1000 caracteres.',
        ]);
    
        $created = $this->tarefa->create([
            'titulo' => $request->input('titulo'),
            "descricao" => $request->input("descricao"),
        ]);
    
        if($created){
            return redirect()->back()->with('message', 'criado com sucesso');
        }
        return redirect()->back()->with('message', 'erro ao criar');
    }

    /*public function show(Tarefa $tarefa)
    {
        return view('tarefas_show', ['tarefa' => $tarefa]);
    }*/

    public function edit(Tarefa $tarefa)
    {
        return view('tarefas_edit', ['tarefa' => $tarefa]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'nullable|max:1000',
            'concluida' => 'nullable|boolean', 
        ], [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.max' => 'O título deve ter menos de 255 caracteres.',
            'descricao.max' => 'A descrição deve ter menos de 1000 caracteres.',
        ]);
    
        $updated = $this->tarefa->where('id', $id)->update([
            'titulo' => $request->input('titulo'),
            'descricao' => $request->input('descricao'),
            'concluida' => $request->input('concluida') === '1'
        ]);
    
        if ($updated) {
            return redirect()->back()->with('message', 'Atualizado com sucesso');
        }
        return redirect()->back()->with('message', 'Erro ao atualizar');
    }
    

    public function destroy(string $id)
    {
        $this->tarefa->where('id', $id)->delete();

        return redirect()->route('tarefas.index');
    }
}
