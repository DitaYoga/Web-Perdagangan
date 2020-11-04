<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\BerandaController;

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

Route::get('/',[BerandaController::class, 'index']);
Route::get('shop',[BerandaController::class,'shop']);
Route::get('about',[BerandaController::class,'about']);
Route::get('contact',[BerandaController::class,'contact']);


Route::get('search',[BerandaController::class, 'search']);


Route::get('product_details/{id}',[BerandaController::class , 'produkDetail']);



//admin//
Route::get('/dashboard', [JamController::class, 'index']);
Route::get('/dashboard/tambah', [JamController::class, 'create']);
Route::post('/dashboard/tambah/proses', [JamController::class, 'store'])->name('proses_tambah');
Route::get('/dashboard/edit/{id}', [JamController::class, 'edit']);
Route::patch('/dashboard/update/{id}', [JamController::class, 'update'])->name('proses_update');
Route::get('/dashboard/delete/{id}', [JamController::class, 'destroy']);
