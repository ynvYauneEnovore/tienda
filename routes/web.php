<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;


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
    return view('welcome');
});

Route::get('/administrador',  [UserController::class, 'index'], function () {
    return view('administrador');
})->middleware(['auth', 'verified'])->name('administrador');


Route::get('/user', function () {
    return view('user');
})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('productos', ProductosController::class);
});

Route::post('/register', [UserController::class, 'processRegistration'])->name('register');

Route::get('/mi-nueva-ruta', function () {
    return 'Hola, esta es mi nueva ruta!';
});

Route::get('register', [RegisteredUserController::class, 'create'])
->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::post('/emails', [EmailController::class, 'store'])->name('emails.store');

//nuevas

Route::get('/promociones', function () {
    return view('promociones');
});

Route::get('/compras', function () {
    return view('compras');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});
Route::get('/mapas', function () {
    return view('mapas');
});

Route::resource('clientes', ClientesController::class);




require __DIR__.'/auth.php';
