<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se registran las rutas web de tu aplicación.
|
*/

// Ruta raíz que muestra la lista de productos directamente
Route::get('/', [ProductoController::class, 'index'])->name('home');

// Ruta para ver todos los productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

// Ruta para ver el detalle de un producto específico
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

