<?php

namespace App\Http\Controllers;

use App\Models\DadosOriginais; 
use App\Models\DadosEditados;
use Exception;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DadosEditadosController
{
    function retorna_tela_dois(){
        return view('tela_dois');
    }

    
    public function retorna_dados_originais(){

        $dados = DadosOriginais::All();
        $dados_editados = DadosEditados::All();

        if($dados_editados){
            return view('tela_dois', 
                ['dados'=> $dados_editados]
            );
        } else {
            return view('tela_dois', 
                 ['dados'=> $dados]
            );
        }      
    }
    
    public function cria_dados_editados(Request $request, $id){
        
        try {
            $dados = DadosEditados::find($id);
            $dados_originais = DadosOriginais::find($id);

        } catch(\Exception $erro ) {
            return response()->json(['error' =>'Erro ao inserir os dados originais', 'details' => $erro->getMessage()]);
        }

        $dados->nome = $request->nome;
        $dados->email = $request->email;
        $dados->telefone = $request->telefone;
        $dados->idade = $request->idade;
        $dados->escolaridade = $request->escolaridade;
        $dados->altura = $request->altura;
        $dados->peso = $request->peso;
        $dados->atualizado_em = Carbon::now();

        $dados_originais -> atualizado_em =Carbon::now();

        try{
            $dados->save();
            $dados_originais->save();
                return redirect()->route('retorna_tela_dois')->with('success', 'Dados atualizadaos com sucesso!');
        } catch (\Exception $erro_update){
            return redirect()->route('retorna_tela_dois')->with(['error' =>'Erro ao atualizar dados', 'details' => $erro_update->getMessage()]);
        }
       
    }

}