<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        // HEADER //
        $header_home = Menu::create([
            'nama_menu'     => 'HOME',
        ]);
        $header_produk = Menu::create([
            'nama_menu'     => 'PRODUK',
        ]);
        $header_transaksi = Menu::create([
            'nama_menu'     => 'TRANSAKSI',
        ]);
        $header_accounting = Menu::create([
            'nama_menu'     => 'ACCOUNTING',
        ]);
        $header_laporan = Menu::create([
            'nama_menu'     => 'LAPORAN',
        ]);

        // MENU //
        $menus_dashboard = $header_home->relmenu()->create([
            'nama_menu'     => 'Dashboard',
            'icon'          => 'fa-tachometer-alt',
            // 'route'         => 'Dashboard.Index',
        ]);
        $menus_dashboard->relsubmenu()->create([
            'nama_menu'     => 'CRM',
            // 'icon'          => '',
            'route'         => $menus_dashboard->nama_menu.'.Index',
            // 'header_id' => $menus_dashboard->id
        ]);
        $menus_dashboard->relsubmenu()->create([
            'nama_menu'     => 'Sales',
            // 'icon'          => '',
            'route'         => $menus_dashboard->nama_menu.'.Index',
        ]);
        $menus_dashboard->relsubmenu()->create([
            'nama_menu'     => 'Analitic',
            // 'icon'          => '',
            'route'         => $menus_dashboard->nama_menu.'.Index',
        ]);

        // Menu Produk
        $menus_produk = $header_produk->relmenu()->create([
            'nama_menu'     => 'Produk',
            'icon'          => 'fa-th',
            // 'route'         => 'Produk.List',
        ]);
        $menus_produk->relsubmenu()->create([
            'nama_menu'     => 'Tambah Produk',
            // 'icon'          => '',
            'route'         => $menus_produk->nama_menu.'.Tambah',
        ]);
        $menus_produk->relsubmenu()->create([
            'nama_menu'     => 'Produk List',
            // 'icon'          => '',
            'route'         => $menus_produk->nama_menu.'.List',
        ]);

        // Menu Pesanan
        $menus_transaksi = $header_transaksi->relmenu()->create([
            'nama_menu'     => 'Pesanan',
            'icon'          => 'fa-envelope',
            // 'route'         => 'Pesanan.List',
        ]);
        $menus_transaksi->relsubmenu()->create([
            'nama_menu'     => 'Tambah Pesanan',
            // 'icon'          => '',
            'route'         => $menus_transaksi->nama_menu.'.Index',
        ]);
        $menus_transaksi->relsubmenu()->create([
            'nama_menu'     => 'Pesanan List',
            // 'icon'          => '',
            'route'         => $menus_transaksi->nama_menu.'.List',
        ]);

// Menu Penjualan
        $menus_penjualan = $header_transaksi->relmenu()->create([
            'nama_menu'     => 'Penjualan',
            'icon'          => 'fa-cart-arrow-down',
            // 'route'         => 'Penjualan.List',
        ]);
        $menus_penjualan->relsubmenu()->create([
            'nama_menu'     => 'Penjualan List',
            // 'icon'          => '',
            'route'         => $menus_penjualan->nama_menu.'.List',
        ]);

        $menus_transaksi = $header_transaksi->relmenu()->create([
            'nama_menu'     => 'Pembelian',
            'icon'          => 'fa-cart-plus',
            'route'         => 'Pembelian.List',
        ]);
        $menus_transaksi = $header_transaksi->relmenu()->create([
            'nama_menu'     => 'Pembayaran',
            'icon'          => 'fa-money-bill',
            'route'         => 'Pembayaran.List',
        ]);
        $menus_transaksi = $header_transaksi->relmenu()->create([
            'nama_menu'     => 'Mutasi Stok',
            // 'icon'          => '',
            'route'         => 'MutasiStok.List',
        ]);
        $menus_transaksi = $header_transaksi->relmenu()->create([
            'nama_menu'     => 'Opname Stok',
            // 'icon'          => '',
            'route'         => 'Opname.List',
        ]);

        // SUBMENU //



        // relsubmenu()
    }
}
