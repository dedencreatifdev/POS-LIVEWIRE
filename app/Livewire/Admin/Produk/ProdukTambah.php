<?php

namespace App\Livewire\Admin\Produk;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tambah Produk')]

class ProdukTambah extends Component
{
    public function render()
    {
        return view('livewire.admin.produk.produk-tambah');
    }
}
