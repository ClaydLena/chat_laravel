<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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
Route::get('/dashboard', [BookController::class, 'dashboard'])->middleware(['auth']);
Route::get('/dashboard/criar',[BookController::class, 'create'])->middleware(['auth']);
Route::post('/dashboard',[BookController::class, 'store'])->middleware(['auth']);
Route::get('/descricao/{id}',[BookController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/{id}', [BookController::class, 'destroy'])->middleware(['auth']);
Route::get('/livro', [BookController::class, 'livro'])->middleware('auth');
Route::get('/dashboard/favoritos', [BookController::class, 'maislidos'])->middleware(['auth']);
Route::get('/dashboard/lista', [BookController::class, 'lista'])->middleware(['auth']);
Route::get('/dashboard/editar/{id}', [BookController::class, 'edit'])->middleware(['auth']);
Route::put('/dashboard/actualizar/{id}', [BookController::class, 'update'])->middleware(['auth']);
Route::get('/favoritos', [BookController::class, 'favoritos'])->middleware('auth');
Route::get('/leituras',[BookController::class, 'leituras'])->middleware('auth');
Route::post('/livros/ler/{id}',[BookController::class, 'ler'])->middleware('auth');
Route::post('/livros/favoritar/{id}', [BookController::class, 'favoritar'])->middleware('auth');

$user = Auth::user();
Route::get('/me', [UserController::class, 'me'])->middleware('auth');

Route::get('/me/edit/{id}', [UserController::class, 'edit'] )->middleware('auth');

Route::put('/me/actualizar/{id}', [UserController::class, 'update'])->middleware(['auth']);

Route::get('/autoria', [BookController::class, 'autoria'])->middleware('auth');


Route::post('/denunciar/{id}', [BookController::class, 'denunciar'])->middleware('auth');