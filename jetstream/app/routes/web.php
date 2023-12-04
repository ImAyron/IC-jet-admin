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
Route::get('/adm', function(){

    return view('adm');
})->name('adm')->middleware('auth');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $antena=new AntenaController;
    $countA=$antena->count();

    $item=new ItemController;
    $count=$item->count();

    $tag=new TagController;
    $countTag=$tag->count();

    $lavanderia=leitura::where('company_id','Lavanderia')->distinct()->count('EPC');  
   

    return view('dashboard',['countTag'=>$countTag,'count'=>$count,'countA'=>$countA,'lavanderia'=>$lavanderia]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/teste', function () {
  
    return view('teste');
})->name('teste');

Route::post('/leitura/filter','App\Http\Controllers\LeituraController@filter')->name('route_post.php');
Route::get('/leitura/filter','App\Http\Controllers\LeituraController@filter');

Route::resource('/antena', AntenaController::class);
Route::resource('/item', ItemController::class);
Route::resource('/tag', TagController::class);
Route::resource('/leitura', LeituraController::class);



Route::post('/leitura', [App\Http\Controllers\LeituraController::class, 'enviarTag']);

