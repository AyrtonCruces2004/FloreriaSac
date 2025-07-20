<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Página de inicio (productos destacados)
Route::get('/', [HomeController::class, 'index']);

// Página de detalle de producto
Route::get('/producto/{slug}', [HomeController::class, 'showProduct']);

Route::get('/catalogo', [HomeController::class, 'catalogo'])->name('catalogo');
