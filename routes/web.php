<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\FamosoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SaveProController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ValoracionController;
use App\Http\Controllers\UserController;
use App\Mail\ContactMail;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ----
    Página inicial, usuario no logueado
---*/
Route::get('/', function () {
    return view('aria.index');
});

// El usuario no logueado solo puede ver la vista de las publicaciones
Route::get('/publicacion', function () {
    return view('aria.publicaciones');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {



    Route::get('/show/publicacion/{publicacion}', [PublicacionController::class, 'show'])->name('show/publicacion');



    Route::get('/show/producto{producto}', [ProductoController::class, 'show'])->name('show/producto');

    Route::get('/contacto', function () {
        return view('aria.contacto');
    })->name('contacto');

    Route::post('/correo', [ContactMail::class,'sendEmail'])->name('enviarCorreo');

    Route::resource('carritos', CarritoController::class);

    Route::resource('productos', ProductoController::class);

    Route::resource('perfil', PerfilController::class);

    Route::resource('liveware', Livewire::class);

    Route::post('/destroy/{publicacion}', [ValoracionController::class, 'destroy'])
    ->name('destroy');

    Route::post('/store/{publicacion}', [ValoracionController::class, 'store'])
    ->name('store');

    Route::delete('/eliminarcomentario/{id}', [ComentarioController::class, 'eliminarcomentario'])
        ->name('eliminarcomentario');

    Route::post('/publicaciones/save/{publicacion}', [SaveController::class, 'anadiralperfil'])
        ->name('anadiralperfil');

    Route::post('/productos/save/{producto}', [SaveProController::class, 'productoperfil'])
        ->name('productoperfil');

        Route::post('/publicaciones/unsave/{publicacion}', [SaveController::class, 'unsave'])
        ->name('unsave');

        Route::post('/productos/unproduct/{producto}', [SaveProController::class, 'unproduct'])
        ->name('unproduct');

    Route::post('/anadircomentario', [ComentarioController::class, 'anadircomentario'])
    ->name('anadircomentario');

    Route::resource('publicaciones', PublicacionController::class);

    Route::post('/carritos/meter/{producto}', [CarritoController::class, 'anadiralcarrito'])
        ->name('anadiralcarrito');

    Route::post('/carritos/restar/{carrito}', [CarritoController::class, 'restar'])
        ->name('restar');

    Route::post('/carritos/eliminar/{carrito}', [CarritoController::class, 'eliminar'])
        ->name('eliminar');

    Route::post('/carritos/sumar/{carrito}', [CarritoController::class, 'sumar'])
        ->name('sumar');

    Route::post('/carritos/vaciar', [CarritoController::class, 'vaciar'])
        ->name('vaciar');

    Route::post('/carritos/total', [CarritoController::class, 'total'])
        ->name('total');

    Route::resource('/publicaciones', PublicacionController::class);

    // Route::post('/carritos/factura', [CarritoController::class, 'pedido'])
    //     ->name('pedido');

    Route::post('/carritos/factura', [StripePaymentController::class, 'stripe'])
    ->name('stripe');

    Route::get('stripe', [StripePaymentController::class, 'stripe']);

    Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
});

// Modo Admin
// Route::middleware(['auth', 'can:solo-admin'])->group(function () {


//     Route::resource('/productos', ProductoController::class);
//     Route::resource('/publicaciones', PublicacionController::class);
        // Route::get('/productos/index', [ProductoController::class, 'edit']);
        // Route::get('/productos/index', [ProductoController::class, 'create']);
        // Route::get('/productos/index', [ProductoController::class, 'store']);
        // Route::get('/productos/index', [ProductoController::class, 'update']);


        //     Route::get('/productos/{id}/edit', [ProductoController::class, 'edit']);
        //     Route::get('/productos/{id}/store', [ProductoController::class, 'store']);
        // Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);
        // Route::put('/productos/{id}', [ProductoController::class, 'update'])
        //     ->name('productos.update');



        // Route::get('/productos/index', [ProductoController::class, 'edit']);
        // // Route::get('/productos/create/{id}', [ProductoController::class, 'create']);
        // Route::post('/productos', [ProductoController::class, 'store'])
        //     ->name('productos.store');



        //     Route::get('/productos/{id}/edit', [ProductoController::class, 'edit']);
        // Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);
        // Route::put('/productos/{id}', [ProductoController::class, 'update'])
        //     ->name('productos.update');


// });

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('/productos', ProductoController::class);
    Route::resource('/publicaciones', PublicacionController::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});
require __DIR__.'/auth.php';
