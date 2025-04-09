<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadosOriginais; 


use Carbon\Carbon;

class DadosOriginaisController
{   


    function retorna_tela_um(){
        return view('tela_um');
    }

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
    ]);

    $validated['criado_em'] = Carbon::now();

    try{
        DadosOriginais::create($validated);

        return redirect()->route('retorna_tela_um')->with('success', 'Vaga criada com sucesso!');

    } catch (\Exception $erro_create){
        return response()->json(['error' =>'Erro ao inserir os dados originais', 'details' => $erro_create->getMessage()]);
    }

    }
}