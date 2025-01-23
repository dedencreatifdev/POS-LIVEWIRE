<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// DASHBOARD
Route::get('/', DashboardIndex::class)->name('Dashboard.Index');

// PRODUK
Route::get('/produk-list', DashboardIndex::class)->name('Produk.Index');
Route::get('/produk', DashboardIndex::class)->name('Produk.List');

// PESANAAN
Route::get('/pesanan', DashboardIndex::class)->name('Pesanan.Index');
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
