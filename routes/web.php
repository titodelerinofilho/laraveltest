<?php

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

    $nome = 'Pedro';
    $idade = 27;

    $arr = [10,20,30,40,50];
    $carros = ["Opel", "Volkswagen", "Alfa Romeo", "Dodge"];

    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "Programador PHP",
            'arr' => $arr,
            'carros' => $carros
        ]
    );
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/product', function () {
    $busca = request('search');
    return view('product', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});

Route::get('/catalogo', function () {
    return view('catalogo');
});
