<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroreclamacionesController;
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
Route::get('/', [LibroreclamacionesController::class,'index'])->name('reclamaciones.index');


Route::post('reclamaciones/create', [LibroreclamacionesController::class,'create'])->name('reclamaciones.create');
