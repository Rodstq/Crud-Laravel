<?php

use App\Http\Controllers\DadosOriginaisController;
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

Route::post('/cria_dados_originais',[DadosOriginaisController::class,'cria_dados_originais'])->name('cria_dados_originais');

Route::get('/dados_originais',[DadosOriginaisController::class,'retorna_dados_originais'])->name('retorna_tela_dois');;

