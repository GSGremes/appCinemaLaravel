<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
use App\Http\Controllers\funcionarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cadastro-filme', [filmeController::class,'buscaCadastroFilme'])->name('buscar-cadastro-filme');
Route::post('/cadastro-filme', [filmeController::class,'CadastrarFilme'])->name('cadastro-filme');

Route::get('/gerenciar-filme', [filmeController::class,'MostrarGerenciadorFilme'])->name('gerenciar-filme');

Route::get('/cadastro-funcionario', [funcionarioController::class,'buscarCadastroFuncionario'])->name('buscar-cadastro-funcionario');
Route::post('/cadastro-funcionario', [funcionarioController::class,'cadastrarFuncionario'])->name('cadastro-funcionario');
Route::get('/gerenciar-funcionario', [funcionarioController::class,'MostrarGerenciadorFuncionario'])->name('gerenciar-funcionario');

Route::delete('/gerenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class,'ApagarFuncionario'])->name('apagar-funcionario');

Route::get('/alterar-funcionario/{registroFuncionario}',[funcionarioController::class,'MostrarRegistroFuncionario'])->name('mostrar-funcionario');
Route::put('/gerenciar-funcionario/{registroFuncionario}',[funcionarioController::class,'AlterarBancoFuncionario'])->name('alterar-banco-funcionario');

