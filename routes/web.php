<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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



//Route Untuk Semua Midleware Admin
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/dataAdmin', [AdminController::class, 'dataAdmin']);
    Route::get('/dataPengajar', [AdminController::class, 'dataPengajar']);
    Route::get('/dataJamaah', [AdminController::class, 'dataJamaah']);
    Route::get('/tambahJadwal', [AdminController::class, 'tambahJadwal']);
});

//Route Untuk Semua Midleware Auth
Route::middleware('auth')->group(function () {
    Route::get('/Dashboard', [UserController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
});




Route::get('/AlQuran', [ApiController::class, 'ApiData']);
Route::get('/AlQuran/{surat}', [ApiController::class, 'GetApiData']);
Route::post('/register', [LoginController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/', function () {
    return view('index', [
        "title" => "Belajar Mengaji Bersama Almaas"
    ]);
})->name('login');
