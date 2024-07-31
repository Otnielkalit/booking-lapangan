<?php

use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaPublikController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [BerandaPublikController::class, 'home'])->name('publik.home');
Route::get('/produk', [BerandaPublikController::class, 'produk'])->name('publik.produk');
Route::get('/produk-detail', [BerandaPublikController::class, 'produkDetail'])->name('publik.produk-detail');
Route::get('/lapangan', [BerandaPublikController::class, 'lapangan'])->name('publik.lapangan');


Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('dashboard', [BerandaAdminController::class, 'dashboard'])->name('admin.dashboard');
});


Route::prefix('publik')->middleware(['auth', 'auth.publik'])->group(function () {
    // Route::get('home', [BerandaPublikController::class, 'home'])->name('publik.home');
});


Route::get('logout', function () {
    Auth::logout();
});

Auth::routes();
