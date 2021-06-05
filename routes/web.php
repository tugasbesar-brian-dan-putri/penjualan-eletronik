<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('tentang-kami', [BerandaController::class, 'tentangkami'])->name('beranda.tentangkami');
Route::resource('beranda', BerandaController::class);
Route::resource('produk', ProdukController::class);

Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::middleware(['admin'])->group(function () {
        Route::resource('dashboard', DashboardController::class);
    });
});