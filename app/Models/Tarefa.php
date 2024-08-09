<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'titulo',
        'descricao',
        'concluida',
    ];

    protected $casts = [
        'concluida' => 'boolean',
    ];
}
