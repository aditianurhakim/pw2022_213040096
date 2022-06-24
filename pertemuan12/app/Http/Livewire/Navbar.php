<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use App\Models\Produk;
use Livewire\Component;

class Navbar extends Component
{
    public $query;

    public function render()
    {
        return view('livewire.navbar', [
            'kategoris' => Kategori::all(),
            'query' => $this->query
        ]);
    }
}
