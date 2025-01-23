<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Admin\Produk\ProdukList;
use App\Livewire\Admin\Produk\ProdukTambah;
use App\Livewire\Auth\LoginIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth'])->group(function () {
    // DASHBOARD
    Route::get('/', DashboardIndex::class)->name('Dashboard.Index');

    // PRODUK
    Route::get('/produk-tambah', ProdukTambah::class)->name('Produk.Tambah');
    Route::get('/produk-list', ProdukList::class)->name('Produk.List');

    // PESANAAN
    Route::get('/pesanan-tambah', ProdukTambah::class)->name('Pesanan.Index');
    Route::get('/pesanan-list', DashboardIndex::class)->name('Pesanan.List');

    // PENJUALAN
    Route::get('/penjualan', DashboardIndex::class)->name('Penjualan.List');

    // PEMBELIAN
    Route::get('/pembelian', DashboardIndex::class)->name('Pembelian.List');

    // PEMBAYARAN
    Route::get('/pembayaran', DashboardIndex::class)->name('Pembayaran.List');

    // MUTASI STOK
    Route::get('/mutasi-stok', DashboardIndex::class)->name('MutasiStok.List');

    // OPNAME STOK
    Route::get('/opname-stok', DashboardIndex::class)->name('Opname.List');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', LoginIndex::class)->name('login');

});
