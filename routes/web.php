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
Route::get('/dashboard', [BookController::class, 'dashboard'])->middleware('auth','admin');
Route::get('/dashboard/criar',[BookController::class, 'create'])->middleware('auth','admin');
Route::post('/dashboard',[BookController::class, 'store'])->middleware('auth','admin');
Route::get('/descricao/{id}',[BookController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/{id}', [BookController::class, 'destroy'])->middleware('auth','admin');
Route::get('/livro', [BookController::class, 'livro'])->middleware('auth');
Route::get('/dashboard/favoritos', [BookController::class, 'maislidos'])->middleware('auth','admin');
Route::get('/dashboard/lista', [BookController::class, 'lista'])->middleware('auth','admin');
Route::get('/dashboard/editar/{id}', [BookController::class, 'edit'])->middleware('auth','admin');
Route::put('/dashboard/actualizar/{id}', [BookController::class, 'update'])->middleware('auth','admin');
Route::get('/favoritos', [BookController::class, 'favoritos'])->middleware('auth');
Route::get('/leituras',[BookController::class, 'leituras'])->middleware('auth');
Route::post('/livros/ler/{id}',[BookController::class, 'ler'])->middleware('auth');
Route::post('/livros/favoritar/{id}', [BookController::class, 'favoritar'])->middleware('auth');


