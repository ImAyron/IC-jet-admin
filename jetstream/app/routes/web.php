<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Operacao;
use App\Http\Controllers\operationController;
use App\Http\Controllers\OperacaoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AntenaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeituraController;

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

    $antena=new AntenaController;
    $countA=$antena->count();

    $item=new ItemController;
    $count=$item->count();

    $countLavanderia=$item->lavanderia();

    $tag=new TagController;
    $countTag=$tag->count();

    
    $teste= DB::table('operations')->where('antena','lavanderia')->count();
    

    return view('dashboard',['lav'=>$countLavanderia,'countTag'=>$countTag,'count'=>$count,'countA'=>$countA,'lavanderia'=>$teste]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/teste', function () {
  
    return view('teste');
})->name('teste');



Route::resource('/operation',operationController::class);
Route::resource('/operacao', OperacaoController::class);
Route::resource('/antena', AntenaController::class);
Route::resource('/item', ItemController::class);
Route::resource('/tag', TagController::class);
Route::resource('/leitura', LeituraController::class);

Route::post('/leitura', [App\Http\Controllers\LeituraController::class, 'enviarTag']);

