<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class ProdukDetail extends Component
{
    public $produk, $jumlah_pesanan, $fetch;

    protected $updateQueryString = ['jumlah_pesanan'];

    public function mount($id)
    {
        $produkDetail = Produk::find($id);

        if ($produkDetail) {
            $this->produk = $produkDetail;
        }
    }

    public function keranjang()
    {

        dd("Abus");

        // $this->validate([
        //     'jumlah_pesanan' => 'required'
        // ]);

        //Redirect jika belum login
        // if (!Auth::user()) {
        //     return redirect()->route('login');
        // }
    }

    public function render()
    {
        if ($this->jumlah_pesanan) {
            $this->fetch = $this->jumlah_pesanan;
        }

        return view('livewire.produk-detail');
    }
}
