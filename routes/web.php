<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboardadmin', function () {
        return view('dashboardadmin');
    });
});

require __DIR__.'/auth.php';

Route::get('/login', function () {
    return view('auth.login');
    })->name('login')->middleware('guest');


/* Ruta para productos */
// Ruta para mostrar el formulario de creación
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Ruta para procesar el almacenamiento
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

// Ruta para mostrar el formulario de edición
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

// Ruta para procesar la actualización
Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

// Ruta para mostrar la lista de productos (con paginación y cantidad personalizada)
Route::get('/products', [ProductController::class, 'customIndex'])->name('products.customIndex');
