<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mascotas;
use App\Http\Controllers\General;

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

Route::get('/', [General::class, 'index']);

Route::get('/nosotros', [General::class, 'nosotros']);

Route::get('/contactos', [General::class, 'contactos']);

Route::get('/mascotas/perros', [Mascotas::class, 'perros']);

Route::get('/mascotas/gatos', [Mascotas::class, 'gatos']);
