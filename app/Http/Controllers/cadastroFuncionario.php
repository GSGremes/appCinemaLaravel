<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class cadastroFuncionario extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');  
    }
        
    public function cadastrarFuncionario(Request $request){
        $dadosfuncionarios = $request->validate(
        [
            'emailFun' => 'string|required',
            'nomeFun' => 'string|required',
            'senhaFun' => 'string|required',
            'whatssappFun' => 'string|required',
            'cpfFun' => 'string|required',
        ]
    );
    Funcionario::create($dadosfuncionarios);
    return Redirect::route('cadastro-funcionario');
    }
      
}
