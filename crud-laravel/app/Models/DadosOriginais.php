<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosOriginais extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'nome',
        'email',
        'telefone',
        'idade',
        'cpf',
        'escolaridade',
        'altura',
        'peso',
        'criado_em',
        'atualizado_em'
    ];
}
