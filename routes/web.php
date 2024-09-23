<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home-index');


// Route::view('/jogos', 'jogos', ['name' => 'Osmar']);


// Route::get('/jogos', function(){
//     return "eu sou lindo";
// });


// enviar com ou sem parametro passa ? e null na função
// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos', ['idJogo' => $id, 'nomeJogo' =>$name]);


// })->where(['id', '[0-9]+', 'name' => '[a-z]+']);

// parametro para receber texto ->where('name', '[A-Za-z]+')

// Route::get('/jogos', [JogosController::class, 'index']);

// Route::get('/jogos', function(){
//     return view('jogos');
// });


// vou criar um prefixo para todas as rotas
Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id','[0-9]+')->name('jogos-destroy');



});



// erro ao localizar a rota cai neste callback
Route::fallback(function(){
    return 'Rota não encontrada';
});
