<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tarefas', [TarefasController::class, 'index'])->name('tarefas.index');
Route::get('/tarefas/create', [TarefasController::class, 'create'])->name('tarefas.create');
Route::post('/tarefas', [TarefasController::class, 'store'])->name('tarefas.store');
//Route::get('/tarefas/{tarefa}', [TarefasController::class, 'show'])->name('tarefas.show');
Route::get('/tarefas/{tarefa}/edit', [TarefasController::class, 'edit'])->name('tarefas.edit');
Route::put('/tarefas/{tarefa}', [TarefasController::class, 'update'])->name('tarefas.update');
Route::delete('/tarefas/{tarefa}', [TarefasController::class, 'destroy'])->name('tarefas.destroy');


