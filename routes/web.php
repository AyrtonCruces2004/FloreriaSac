<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Página de inicio (productos destacados)
Route::get('/', [HomeController::class, 'index']);

// Página de detalle de producto
Route::get('/producto/{slug}', [HomeController::class, 'showProduct'])
     ->name('producto.show');
Route::get('/catalogo', [HomeController::class, 'catalogo'])->name('catalogo');
// en routes/web.php, reemplaza tu Route::view por:
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

// Catálogo
// Renderiza directamente la vista contacto/contacto.blade.php al visitar /contacto
Route::view('/contacto', 'contacto.contacto')->name('contacto');
Route::view('/nosotros', 'nosotros.nosotros')->name('nosotros');
Route::view('/login', 'login.login')->name('login');
Route::view('/register', 'register.register')->name('register');

// Carrito
Route::get('/carrito',  [HomeController::class, 'showCart'])->name('carrito');
Route::post('/carrito/add/{slug}',    [HomeController::class, 'addToCart'])->name('cart.add');
Route::post('/carrito/remove/{slug}', [HomeController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/carrito/update/{slug}', [HomeController::class, 'updateCart'])->name('cart.update');