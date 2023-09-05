<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\TiresController;
use App\Http\Controllers\Front\ServicesController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/nosotros', [AboutController::class, 'index']);
Route::get('/llantas', [TiresController::class, 'index']);
Route::get('/servicios', [ServicesController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contacto', [ContactController::class, 'index']);


Route::post('/login', [ConnectController::class, 'postLogin']);
Route::get('/login', [ConnectController::class, 'getLogin']);
Route::get('/register', [ConnectController::class, 'getRegister']);
Route::post('/register', [ConnectController::class, 'postRegister']);
Route::get('/logout', [ConnectController::class, 'getLogout']);

