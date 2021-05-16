<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
	return view('home');
});

// Rutas para imagenes
Route::resource('images', ImagesController::class)->parameters(['images' => 'images']);

Route::get('categoria/{categorias}', [ImagesController::class, 'categoria'])->name('images.categoria');