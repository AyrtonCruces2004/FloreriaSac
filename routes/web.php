<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Página de inicio (productos destacados)
Route::get('/', [HomeController::class, 'index']);

// Página de detalle de producto
Route::get('/producto/{slug}', [HomeController::class, 'showProduct'])
     ->name('producto.show');
Route::get('/catalogo', [HomeController::class, 'catalogo'])->name('catalogo');
// Catálogo
// Renderiza directamente la vista contacto/contacto.blade.php al visitar /contacto
Route::view('/contacto', 'contacto.contacto')->name('contacto');
Route::view('/nosotros', 'nosotros.nosotros')->name('nosotros');