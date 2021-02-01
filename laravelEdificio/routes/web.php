<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EdificioController;
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

Route::get('/', [InicioController::class,'inicio'])->name("home");

Route::get('edificios', [EdificioController::class,'index'])->name("edificios.index");

Route::post('edificios', [EdificioController::class,'store'])->name("edificios.index");

Route::get('edificios/crear', [EdificioController::class, 'create'])->name("edificios.create");

Route::get('edificios/{edificio}', [EdificioController::class, 'show'])->name("edificios.show");

Route::put('edificios/{edificio}', [EdificioController::class, 'update'])->name("edificios.show");

Route::get('edificios/{edificio}/editar', [EdificioController::class, 'edit'])->name("edificios.edit");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('admin/catalog',function(){})->middleware('auth');

Route::get('profile', [ProfileController::class,'show'])->middleware('auth');
