<?php

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
    return "<h1>Laravel</h1>";
});

Route::get('/ola', function () {
    return "<h1>Seja Bem Vindo !!</h1>";
});

Route::get('/ola/sejabemvindo', function () {
    return view('welcome');
});

Route::get('/nome/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    return "<h1>Ola, $nome $sobrenome</h1>";
});


Route::get('/repetir/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1>Ola, $nome ! </h1>";
    }
});
