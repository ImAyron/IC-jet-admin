<?php

use Illuminate\Support\Facades\Route;


use App\Models\leitura;
use App\Http\Controllers\AntenaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
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
Route::get('/adm', function () {

    return view('adm');
})->name('adm')->middleware('auth');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $antena = new AntenaController;
    $countA = $antena->count();

    $item = new ItemController;
    $count = $item->count();

    $tag = new TagController;
    $countTag = $tag->count();

    // Recupera os EPCs de entrada nos últimos 7 dias e as leituras mais recentes
    $entradas = Leitura::where('company_id', 'Lavanderia Entrada')
        ->where('created_at', '>=', now()->subDays(7))  // Filtra pelos últimos 7 dias
        ->orderBy('created_at', 'desc')  // Ordena pelas leituras mais recentes
        ->groupBy('EPC')  // Agrupa por EPC para pegar a leitura mais recente de cada um
        ->pluck('EPC');   // Recupera os EPCs

    // Recupera os EPCs de saída nos últimos 7 dias e as leituras mais recentes
    $saidas = Leitura::where('company_id', 'Lavanderia Saida')
        ->where('created_at', '>=', now()->subDays(7))  // Filtra pelos últimos 7 dias
        ->orderBy('created_at', 'desc')  // Ordena pelas leituras mais recentes
        ->groupBy('EPC')  // Agrupa por EPC para pegar a leitura mais recente de cada um
        ->pluck('EPC');   // Recupera os EPCs


    // Filtra os itens que entraram e ainda não saíram
    $nao_sairam = $entradas->diff($saidas);

    $lavanderia = $nao_sairam->count();




    return view('dashboard', ['countTag' => $countTag, 'count' => $count, 'countA' => $countA, 'lavanderia' => $lavanderia]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/teste', function () {

    return view('teste');
})->name('teste');

Route::post('/leitura/filter', 'App\Http\Controllers\LeituraController@filter')->name('route_post.php');
Route::get('/leitura/filter', 'App\Http\Controllers\LeituraController@filter');
Route::get('/leitura/lost', 'App\Http\Controllers\LeituraController@lost');

Route::resource('/antena', AntenaController::class);
Route::resource('/item', ItemController::class);
Route::resource('/tag', TagController::class);
Route::resource('/leitura', LeituraController::class);



Route::post('/leitura', [App\Http\Controllers\LeituraController::class, 'enviarTag']);

