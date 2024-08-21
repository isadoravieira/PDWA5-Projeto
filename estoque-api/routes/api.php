<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);
