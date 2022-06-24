<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use GuzzleHttp\Handler\Proxy;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Navbar;
use App\Models\Kategori;

class ProdukKategori extends Component
{
    use WithPagination;

    public $kategori;

    protected $updateQueryString = ['query'];

    public function mount($kategoriId)
    {
        $kategoriDetail = Kategori::find($kategoriId);

        if ($kategoriDetail) {
            $this->kategori = $kategoriDetail;
        }
    }

    public function render()
    {
        if (
            request('search') !=
            null
        ) {
            $produks = Produk::where('kategori_id', $this->kategori->id)->where('nama', 'like', '%' . request('search') . '%')->paginate(12);
        } else {
            $produks = Produk::where('kategori_id', $this->kategori->id)->paginate(12);
        }

        return view('livewire.produk-index', [
            'produks' => $produks,
            'title' => $this->kategori->nama
        ]);
    }
}
