<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;

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

// Rutas de autenticación (si usas Auth::routes())
Auth::routes(['verify' => true]);

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['admin'])->prefix('dashboardadmin')->group(function () {

    // Route::get('/dashboardadmin', [DashboardController::class, 'index']);

    Route::get('/', [ProductController::class, 'index']);

    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

    // Ruta para procesar el almacenamiento
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // Ruta para mostrar el formulario de edición
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

    // Ruta para procesar la actualización
    Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

    // Ruta para mostrar la lista de productos (con paginación y cantidad personalizada)
    Route::get('/products', [ProductController::class, 'customIndex'])->name('products.customIndex');
});

Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/profile/edit/{user}', [ProfileController::class, 'edit'])->name('profile.edit');
    
});

Route::middleware('role:customer')->get('/home', [WelcomeController::class, 'index'])->name('inicio');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
/* Route::get('/login', function () {
    return view('auth.login');
    })->name('login')->middleware('guest'); */


/* Ruta para productos */
// Ruta para mostrar el formulario de creación



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* -------------- SECTION MEN --------------------*/

Route::prefix('men')->group(function () {

    /*Ruta para mostrar menu principal de la section hombres */
    Route::get('/', [App\Http\Controllers\MenController::class, 'index'])->name('menSection');

    /* Ruta para mostrar las camiseta cropped */
    Route::get('/camisetas/cropped', [App\Http\Controllers\MenController::class, 'getTshirtsCropped'])->name('menTshirtCropped');

    /* Ruta para mostrar las camisetas estampadas */
    Route::get('/camisetas/estampadas', [App\Http\Controllers\MenController::class, 'getTshirtsGraphic'])->name('menTshirtGraphic');

    /*Ruta para mostrar las camisetas basicas */
    Route::get('/camisetas/basicas', [App\Http\Controllers\MenController::class, 'getTshirtsBasic'])->name('menTshirtBasic');

    /*Ruta para mostrar las sudaderas basicas */
    Route::get('/sudaderas', [App\Http\Controllers\MenController::class, 'getSudaderas'])->name('menSudaderas');

    /*Ruta para mostrar las sudaderas sin capuchas */
    Route::get('/sudaderas/sin-capuchas', [App\Http\Controllers\MenController::class, 'getSudaderasSinCapucha'])->name('menSudaderaSinCapucha');

    /*Ruta para mostrar los pantalones vaqueros */
    Route::get('/pantalones', [App\Http\Controllers\MenController::class, 'getPantalonesVaqueros'])->name('menPantalones');

    /* Ruta para mostrar los pantalones baggy */
    Route::get('/pantalones/baggy', [App\Http\Controllers\MenController::class, 'getPantalonesBaggy'])->name('menPantalonesBaggy');

    /* Ruta para mostrar los pantalones cargo */
    Route::get('/pantalones/cargo', [App\Http\Controllers\MenController::class, 'getPantalonesCargo'])->name('menPantalonesCargo');

    /* Ruta para mostrar las chaquetas*/
    Route::get('/chaquetas', [App\Http\Controllers\MenController::class, 'getChaquetas'])->name('menChaquetas');

    Route::post('/sudaderas/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
});


Route::middleware(['auth'])->prefix('cart')->group(function () {
    /* RUTA PARA VER LOS PRODUCTOS AÑADIDO AL CARRITO */
    Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('ProductosCarrito');
    /* RUTAS PARA LA FUNCIONALIDADES DEL CARRITO */
    Route::get('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');

    Route::delete('/remove/{id}', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('removeFromCart');

    

});
