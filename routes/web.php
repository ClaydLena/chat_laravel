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
    return view('welcome');
});

Route::get('/descricao', function () {
    return view('livros.descricao');
});

Route::get('/favoritos', function () {
    return view('livros.favoritos');
});

Route::get('/livro', function () {
    return view('livros.livro');
});

Route::get('/painel', function () {
    return view('livros.painel');
});
