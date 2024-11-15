<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Storage::append("arduinolog.txt",
        "Time: " . now()->format("Y-m-d H:i:s") . ', ' .
        "UID: " . $request->get("UIDresult", "n/a") . ',' 
    
    );
});


Route::post('/leitura', [App\Http\Controllers\LeituraController::class, 'enviarTag']);
Route::post('/tag', [App\Http\Controllers\TagController::class,'cadastroAutomatico']);