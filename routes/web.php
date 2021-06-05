<?php

use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\HeaderTransaksiController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
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
    Route::resource('keranjang', KeranjangController::class);


    Route::group(['middleware' => ['admin']], function () {
        Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');

        Route::resource('dashboard', DashboardController::class);
        Route::resource('user', UserController::class);
        Route::resource('transaksi', CheckoutController::class);
        Route::resource('produk', AdminProdukController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('header-transaksi', HeaderTransaksiController::class);
    });
});