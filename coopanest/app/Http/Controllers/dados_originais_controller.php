<?php

namespace App\Models\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;


class dados_originais_controller
{
    
    public function cria_dados_originais(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'e-mail' => 'required|string|max:255',
            'telefone' => 'required|digits:11',
            'idade' => 'required|string|max:255',
            'cpf' => 'required|digits:11|unique:dados_originais,cpf',
            'escolaridade' => 'required|string|max:255',
            'altura' => 'required|numeric|between:0,9.99',
            'peso' => 'required|numeric|between:000.00,999.99',
            'possui_filhos' => 'required|boolean',
            'start_date' => [
            'criado em',
            Rule::date()->beforeOrEqual(today()->subDays(7)),
        ],  
    ]);
    }
}