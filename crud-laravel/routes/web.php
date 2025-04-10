<?php

use App\Http\Controllers\DadosOriginaisController;
use App\Http\Controllers\DadosEditadosController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[DadosOriginaisController::class,'retorna_tela_um'])->name('retorna_tela_um');

Route::post('/dados',[DadosOriginaisController::class,'cria_dados_originais'])->name('cria_dados_originais');

Route::get('/dados',[DadosEditadosController::class,'retorna_dados_originais'])->name('retorna_tela_dois');;

Route::put('/dados/{id}',[DadosEditadosController::class,'cria_dados_editados'])->name('cria_dados_editados');


