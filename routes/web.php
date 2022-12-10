<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'index']);



Route::get('/descricao/{id}',[BookController::class, 'show']);

Route::get('/favoritos', function () {
    return view('cliente.favoritos');
});

Route::get('/livro', function () {
    return view('cliente.livro');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/dashboard/favoritos', function () {
    return view('dashboard.favoritos');
});

Route::get('/dashboard/criar',[BookController::class, 'create']);
Route::post('/dashboard',[BookController::class, 'store']);

Route::get('/dashboard/lista', function () {
    return view('dashboard.lista');
});

