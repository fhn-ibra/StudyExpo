<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PendaftarController;

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

Route::group(['middleware' => ['guest']], function() {
    Route::get('/', function () {
        return view('auth.guestlogin');
    })->name('login');

    Route::get('/login', function () {
        return view('auth.adminlogin');
    })->name('admin-login');
});



Route::group(['middleware' => ['auth']], function () {
Route::get('/daftar', [PendaftarController::class, 'index'])->name('guest');
Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
Route::get('/sesi1', [AdminController::class, 'sesi1'])->name('sesi1');
Route::get('/sesi2', [AdminController::class, 'sesi2'])->name('sesi2');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});




Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

