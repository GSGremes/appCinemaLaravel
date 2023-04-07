<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return view('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomeFilme' => 'string|required',
            'atoresFilme' => 'string|required',
            'dataLancamentoFilme' => 'string|required',
            'sinopseFilme' => 'string|required',   
            'capaFilme' => 'string|required',
        ]);
        cadastroFilmeModel::create($dadosFilme);
        return Redirect::route('cadastro-filme');

    }
}
