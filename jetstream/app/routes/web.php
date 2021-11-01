<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Operacao;
use App\Http\Controllers\OperacaoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AntenaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;

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
    return view('principal');
});
Route::get('/adm', function(){

    return view('adm');
})->name('adm')->middleware('auth');

Route::get('/geral', function(){

    $operacaos = Operacao::orderBy('data_hora', 'desc')->get();
    return view('geral',['operacaos'=> $operacaos]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/operacao', OperacaoController::class);
Route::resource('/antena', AntenaController::class);
Route::resource('/item', ItemController::class);
Route::resource('/tag', TagController::class);