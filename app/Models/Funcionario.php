<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [ //fillable vai entender que o que esta dentro do array vai ser editado ou modificado
        'nome',
        'cpf',
        'senha',
        'funcao'
]   ;
    use HasFactory;
}
