<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadosOriginais; 

class DadosOriginaisController
{   

    public function retorna_dados_originais(){

        $dados = DadosOriginais::All();

        return view('tela_dois', 
            ['dados'=> $dados]
        );
    }
    
    public function cria_dados_originais(Request $request){
      
      $validated =  $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefone' => 'required|digits:11',
            'idade' => 'required|integer|min:0|max:120',
            'cpf' => 'required|digits:11|unique:dados_originais,cpf',
            'escolaridade' => 'required|string|max:255',
            'altura' => 'required|numeric|between:0,9.99',
            'peso' => 'required|numeric|between:0,999.99',
            'criado_em' => [
            'required',
            'date',
            'before_or_equal:' . now()->subDays(7)->toDateString(),
        ], 
    ]);

    try{
        DadosOriginais::create($validated);

    return response()->json(['message' => 'Dados salvos com sucesso!']);

    } catch (\Exception $erro_create){
        return response()->json(['error' =>'Erro ao inserir os dados originais', 'details' => $erro_create->getMessage()]);
    }
    

    }
}