<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use GuzzleHttp\Handler\Proxy;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Navbar;

class ProdukIndex extends Component
{
    use WithPagination;

    public $judul;

    public $kategori;

    protected $updateQueryString = ['query'];

    public function render()
    {
        if (
            request('search') !=
            null
        ) {
            $produks = Produk::where('nama', 'like', '%' . request('search') . '%')->paginate(12);
        } else {
            $produks = Produk::paginate(12);
        }

        if ($this->kategori != null) {
            $judul = $this->kategori->nama;
        } elseif (request('search') != null) {
            $judul = 'Menampilkan "' . request('search') . '"';
        } else {
            $judul = 'Semua Produk';
        }

        return view('livewire.produk-index', [
            'produks' => $produks,
            'title' => $judul
        ]);
    }
}
