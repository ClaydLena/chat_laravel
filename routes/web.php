<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
//use App\Http\Controllers\UserController;

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
Route::get('/dashboard', [BookController::class, 'dashboard']);
Route::get('/dashboard/criar',[BookController::class, 'create']);
Route::post('/dashboard',[BookController::class, 'store']);
Route::get('/descricao/{id}',[BookController::class, 'show']);
Route::delete('/dashboard/{id}', [BookController::class, 'destroy']);
Route::get('/livro', [BookController::class, 'livro']);
Route::get('/dashboard/favoritos', [BookController::class, 'maislidos']);
Route::get('/dashboard/lista', [BookController::class, 'lista']);
Route::get('/dashboard/editar/{id}', [BookController::class, 'edit']);
Route::put('/dashboard/actualizar/{id}', [BookController::class, 'update']);
Route::get('/favoritos', [BookController::class, 'favoritos']);
Route::get('/leituras',[BookController::class, 'leituras']);
Route::post('/livros/ler/{id}',[BookController::class, 'ler']);
Route::post('/livros/favoritar/{id}', [BookController::class, 'favoritar']);

