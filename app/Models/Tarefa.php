<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tarefa extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'tarefas';

    protected $fillable = ['titulo', 'concluida', 'categoria'];
}
