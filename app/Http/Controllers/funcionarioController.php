<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class funcionarioController extends Controller
{
    public function buscarCadastroFuncionario(){
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
    return Redirect::route('home');
    }
    
    // public function buscarFuncionario(){
    //     return view('gerenciadorFuncionario',['dadosfuncionario']);
    // }

    public function MostrarGerenciadorFuncionario(Request $request){
        $dadosfuncionarios = Funcionario::all(); 
        // dd($dadosfuncionarios);

        $dadosfuncionarios = Funcionario::query();
        $dadosfuncionarios->when ($request->nomeFun,function($query,$nomefuncionario){
            $query->where('nomeFun','like','%'.$nomefuncionario.'%');
        });

        $dadosfuncionarios = $dadosfuncionarios->get();

        return view('gerenciadorFuncionario',['dadosfuncionario'=>$dadosfuncionarios]);
    }
    
}


