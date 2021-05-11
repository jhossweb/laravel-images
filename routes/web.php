<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;


// Route::get('/images', [ImagesController::class, 'index'])->name('images.index');
// Route::get('/images/create', [ImagesController::class, 'create'])->name('images.create');
// Route::post('/images', [ImagesController::class, 'store'])->name('images.store');
// Route::get('/images/{images}', [ImagesController::class, 'show'])->name('images.show');
// Route::get('/images/{images}/edit', [ImagesController::class, 'edit'])->name('images.edit');
// Route::put('/images/{images}', [ImagesController::class, 'update'])->name('images.update');

Route::resource('images', ImagesController::class)->parameters(['images' => 'images']);