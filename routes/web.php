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
use App\Http\Controllers\PaymentController;

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
Route::get('/home', [WelcomeController::class, 'index'])->name('home');     
// Esta ruta será la página de inicio y ejecutará la función countProducts



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['admin'])->prefix('dashboardadmin')->group(function () {

    // Route::get('/dashboardadmin', [DashboardController::class, 'index']);

    Route::get('/', [ProductController::class, 'index'])->name('dashboardadmin');

    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

    // Ruta para procesar el almacenamiento
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // Ruta para mostrar el formulario de edición
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

    // Ruta para procesar la actualización
    Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

    //Ruta para eliminar un registro
    Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    // Ruta para mostrar la lista de productos (con paginación y cantidad personalizada)
    Route::get('/products', [ProductController::class, 'customIndex'])->name('products.customIndex');


    /******RUTAS PARA EL CRUD DE LOS USUARIOS*******/

    //Ruta para ver tabla de los usuarios registrados
    Route::get('/user', [DashboardController::class, 'showUsers'])->name('showUsers');

     // Ruta para mostar el formulario de edición para usuarios
     Route::get('/user/edit/{id}', [DashboardController::class, 'editUser'])->name('user.edit');

     // Ruta para procesar la actualización de usuarios
     Route::put('/user/update/{id}', [DashboardController::class, 'updateUser'])->name('user.update');

     //Ruta para eliminar un usuario
    Route::delete('/user/delete/{id}', [DashboardController::class, 'destroyUser'])->name('user.destroy');

    Route::get('/user/create', [DashboardController::class, 'createUser'])->name('user.create');

    // Ruta para procesar el almacenamiento del usuario registrado
    Route::post('/user', [DashboardController::class, 'storeUser'])->name('user.store');
});

Route::middleware(['auth', 'verified'])->group(function () {
    

    Route::get('/profile/edit/{user}', [ProfileController::class, 'edit'])->name('profile.edit');
});


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



/* -------------- SECTION MEN --------------------*/

Route::prefix('hombre')->group(function () {

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

    // Ruta para agregar productos al carrito
    Route::post('/agregar-al-carrito', [CartController::class, 'add'])->name('add');
    /*  Route::post('/sudaderas/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/camisetas/cropped/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/camisetas/estampadas/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/camisetas/basicas/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/sudaderas/sin-capuchas/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/pantalones/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/pantalones/baggy/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/pantalones/cargo/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::post('/chaquetas/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('add'); */
    
    
});

/* -------------- SECTION WOMAN --------------------*/

Route::prefix('mujer')->group(function () {

    /*Ruta para mostrar menu principal de la section mujer */
    Route::get('/', [App\Http\Controllers\WomanController::class, 'index'])->name('womanSection');
    
    /*Ruta para mostrar las camisetas */
    Route::get('/camisetas', [App\Http\Controllers\WomanController::class, 'getCamisetas'])->name('womanCamisetas');

    /*Ruta para mostrar los pantalones */
    Route::get('/pantalones', [App\Http\Controllers\WomanController::class, 'getPantalones'])->name('womanPantalones');

    /*Ruta para mostrar los pantalones cortos */
    Route::get('/pantalones-corto', [App\Http\Controllers\WomanController::class, 'getPantalonesCorto'])->name('womanPantalonesCortos');

    /*Ruta para mostrar los vestidos largos */
    Route::get('/vestidos', [App\Http\Controllers\WomanController::class, 'getVestidos'])->name('womanVestidos');

    /*Ruta para mostrar los vestidos cortos */
    Route::get('/vestidos-corto', [App\Http\Controllers\WomanController::class, 'getVestidosCorto'])->name('womanVestidosCortos');

       /*Ruta para mostrar los zapatos */
     Route::get('/zapatos', [App\Http\Controllers\WomanController::class, 'getZapatos'])->name('womanZapatos');
});

Route::middleware(['auth'])->prefix('cart')->group(function () {
    /* RUTA PARA VER LOS PRODUCTOS AÑADIDO AL CARRITO */
    Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('ProductosCarrito');
    /* RUTAS PARA LA FUNCIONALIDADES DEL CARRITO */
    Route::get('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');

    Route::delete('/remove/{id}', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('removeFromCart');

    Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');

    Route::post('/confirmPayment', [PaymentController::class, 'confirmPayment'])->name('confirmPayment');

    Route::post('/updateCart/{id}', [CartController::class, 'updateCart'])->name('updateCart');
});
