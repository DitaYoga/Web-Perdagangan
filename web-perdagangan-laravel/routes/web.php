<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AuthController;

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

Route::group(['middleware' => ['auth', 'CheckLevel:user']], function(){
    Route::get('/', [BerandaController::class, 'index']);
    Route::get('shop', [BerandaController::class,'shop']);
    Route::get('about', [BerandaController::class,'about']);
    Route::get('contact', [BerandaController::class,'contact']);
});

Route::get('search',[BerandaController::class, 'search']);



//admin//
Route::group(['middleware' => ['auth', 'CheckLevel:admin']], function(){
    Route::get('/dashboard', [JamController::class, 'index']);
    Route::get('/dashboard/tambah', [JamController::class, 'create']);
    Route::post('/dashboard/tambah/proses', [JamController::class, 'store'])->name('proses_tambah');
    Route::get('/dashboard/edit/{id}', [JamController::class, 'edit']);
    Route::patch('/dashboard/update/{id}', [JamController::class, 'update'])->name('proses_update');
    Route::get('/dashboard/delete/{id}', [JamController::class, 'destroy']);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_process', [AuthController::class, 'login_process'])->name('login_process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_process', [AuthController::class, 'register_process'])->name('register_process');
Route::get('/logout', [AuthController::class, 'logout']);
