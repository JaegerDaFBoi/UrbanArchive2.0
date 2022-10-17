<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [Controllers\ImagenController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => ['role:artist']], function () {
    
        Route::get('/publicacion/create', [Controllers\PublicacionController::class, 'create'])->name('publicacion.create');
        Route::post('/publicacion/store', [Controllers\PublicacionController::class, 'store'])->name('publicacion.store');
    });
});

