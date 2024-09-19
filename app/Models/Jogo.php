<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $fillabe = [
        'nome',
        'categoria',
        'ano_criacao',
        'valor',
    ];
}
