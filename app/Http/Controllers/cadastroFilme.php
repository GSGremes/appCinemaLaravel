<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class cadastroFilme extends Controller
{
    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    } 

    public function cadastrarFilme(Request $request){
        $dadosFilmes = $request->validate(
            [
            'nomeFilme' => 'string|required',
            'atoresFilme' => 'string|required',
            'dataLancamentoFilme' => 'string|required',
            'sinopseFilme' => 'string|required',   
            'capaFilme' => 'file|required',   
            
        ]
    );

    // dd($dadosFilmes);

    $file = $dadosFilmes['capaFilme'];
    $path = $file->store('capa','public');
    $dadosFilmes['capaFilme'] = $path;

    Filme::create($dadosFilmes);
    return Redirect::route('cadastro-filme');
    }
}
