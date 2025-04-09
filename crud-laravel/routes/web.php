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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model',function(){

    return view('tela_um');

});

Route::get('/dados_originais',[DadosOriginaisController::class,'retorna_dados_originais']);

