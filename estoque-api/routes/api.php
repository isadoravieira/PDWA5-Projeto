<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);

Route::get('/produtos', [CategoriaController::class, 'index']);
Route::post('/produtos', [CategoriaController::class, 'store']);
Route::get('/produtos/{id}', [CategoriaController::class, 'show']);
Route::put('/produtos/{id}', [CategoriaController::class, 'update']);
Route::delete('/produtos/{id}', [CategoriaController::class, 'destroy']);
