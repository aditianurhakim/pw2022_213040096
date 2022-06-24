<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use App\Models\Produk;
use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        return view('livewire.beranda', [
            'produks' => Produk::take(6)->get(),
            'kategoris' => Kategori::all()
        ]);
    }
}
