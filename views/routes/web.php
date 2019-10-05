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
    return view('filho');
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
    return view('myviews', compact('nome', 'sobrenome'));

});

Route::get('/email/{email}', function ($email) {
    if (View::exists('email'))
        return view('email', compact('email'));
    else
        return view('error');

    // Verificando se a view existe 'View::exists('nome_view')'
});

Route::get('/vai', function (){
    return view('pagina');
});

Route::get('/produtos', 'ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}', 'ProdutoControlador@secaoprodutos');
