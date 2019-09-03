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
    return view('welcome');
});

Route::get('/firstView', function () {
    return view('myviews');
});

Route::get('/ola', function () {
    return view('myviews')
        ->with('nome', 'Deyveson')
        ->with('sobrenome', 'Rodrigues');
});

Route::get('/ola2/{nome}/{sobrenome}', function ($nome, $sobrenome) {

//  Formas de passar parametros para view

    /*
     * First form 1º
     *
    return view('myviews')
        ->with('nome', $nome)
        ->with('sobrenome', $sobrenome);
    */

    /*
     * Second form 2º
     *
    $parametros = ['nome' => $nome, 'sobrenome' => $sobrenome];
    return view('myviews', $parametros);
    */

    /*
     * Third form 3º
     */
    return view('myviews', compact('nome','sobrenome'));

});
