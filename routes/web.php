<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;

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
    return view('auth.guestlogin');
});
Route::get('/daftar', function () {
    return view('guest');
})->name('guest');

Route::get('/alogin', function () {
    return view('auth.adminlogin');
});


Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
Route::get('/sesi1', [AdminController::class, 'sesi1'])->name('sesi1');
Route::get('/sesi2', [AdminController::class, 'sesi2'])->name('sesi2');