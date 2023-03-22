<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cadastroFilmeModel;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return view('CadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'filme' =>'string|required', 
            'atores' =>'string|required', 
            'datalancamento' => 'string|required',
            'sinopse' => 'string|required', 
            'capa' => 'string|required'
        ]);
        cadastroFilmeModel::create($dadosFilme);
        return Redirect::route('/');

    }
}
