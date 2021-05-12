<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;


// Rutas para imagenes
Route::resource('images', ImagesController::class)->parameters(['images' => 'images']);


// Rutas para categorias
Route::get('/categorias', [CategoriaController::class, "show"])->name('categoria.show');