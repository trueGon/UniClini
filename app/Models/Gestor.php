<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'senha',

    ];
    use HasFactory;
}
