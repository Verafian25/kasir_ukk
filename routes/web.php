<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\LaporanProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Models\LaporanPenjualan;
use App\Models\LaporanProduk;
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


Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/login', [AuthController::class, 'loginProcess'])->name('auth.login.process');
Route::get('/auth/logout', [AuthController::class, 'logoutProcess'])->name('auth.logout.process');

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
    Route::post('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
    Route::get('/pengguna/edit{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
    Route::post('/pengguna/update', [PenggunaController::class, 'update'])->name('pengguna.update');
    Route::get('/pengguna/delete{id}', [PenggunaController::class, 'delete'])->name('pengguna.delete');

    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/show', [ProdukController::class, 'show'])->name('produk.show');
    Route::post('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::get('/produk/edit{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk.update');
    Route::get('/produk/delete{id}', [ProdukController::class, 'delete'])->name('produk.delete');

    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::post('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::get('/pelanggan/edit{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::post('/pelanggan/update', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::get('/pelanggan/delete{id}', [PelangganController::class, 'delete'])->name('pelanggan.delete');

    route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
    Route::get('/penjualan/delete{id_detail}', [PenjualanController::class, 'delete'])->name('penjualan.delete');
    route::post('/penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
    route::get('/penjualan/new{nota}', [PenjualanController::class, 'new'])->name('penjualan.new');

    Route::get('/laporanproduk', [LaporanProdukController::class, 'index'])->name('laporan.produk');
    Route::get('/laporanproduk/process', [LaporanProdukController::class, 'process'])->name('laporan.produk.proces');
    Route::get('/cetak-laporan', function () {
        $laporanModel = new LaporanProduk();
        $laporan = $laporanModel->getData(request());
        return view('laporan.cetak.produk', compact('laporan'));
    });

    Route::get('/laporanpenjualan', [LaporanPenjualanController::class, 'index'])->name('laporan.penjualan');
    Route::get('/laporanpenjualan/process', [LaporanPenjualanController::class, 'process'])->name('laporan.penjualan.proces');
    Route::get('/cetak-laporan', function () {
        $laporanModel = new LaporanPenjualan();
        $laporan = $laporanModel->getData(request());
        return view('laporan.cetakpenjualan', compact('laporan'));
    });
});


