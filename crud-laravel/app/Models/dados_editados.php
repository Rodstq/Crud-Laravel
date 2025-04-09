<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dados_editados extends Model
{
    use HasFactory;

    protected $table = 'dados_editados';
    
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'idade',
        'cpf',
        'escolaridade',
        'altura',
        'peso',
        'atualizado_em'
    ];
}
