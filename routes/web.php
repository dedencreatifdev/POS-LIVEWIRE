<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',DashboardIndex::class)->name('Dashboard.Index');
Route::get('/produk-list',DashboardIndex::class)->name('Produk.Index');
Route::get('/produk',DashboardIndex::class)->name('Produk.List');
Route::get('/pesanan',DashboardIndex::class)->name('Pesanan.List');
Route::get('/penjualan',DashboardIndex::class)->name('Penjualan.List');
Route::get('/pembelian',DashboardIndex::class)->name('Pembelian.List');
Route::get('/pembayaran',DashboardIndex::class)->name('Pembayaran.List');
Route::get('/mutasi-stok',DashboardIndex::class)->name('MutasiStok.List');
