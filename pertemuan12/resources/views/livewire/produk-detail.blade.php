@extends('layouts.app')

@section('content')
{{-- <x-slot name="showPage"> --}}
{{-- <form wire:submit.prevent="keranjang">
    <input type="text" wire:model="produk">
    <button type="submit">Test</button>
</form> --}}
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-produk">
                <div class="card-body text-center">
                    <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid ukuran-gambar">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{ $produk->nama }}</strong>

            </h2>
            <h4>
                Rp{{ number_format($produk->harga,0,',','.') }}
            </h4>
            <h5>
                @if ($produk->ketersediaan == 1)
                    <span class="badge rounded-pill text-bg-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Stok Tersedia</span>    
                @else
                    <span class="badge rounded-pill text-bg-danger"> <i class="fas fa-times"></i>&nbsp;&nbsp;Stok Habis</span>    
                @endif
            </h5>
            <hr>
            <div class="row">
                <div class="col">
                    {{-- <form wire:submit.prevent="keranjang"> --}}
                        <table class="table" style="border-top: hidden">
                            <tr>
                                <td>Spesifikasi</td>
                                <td>:</td>
                                <td>{{ $produk->spesifikasi }}</td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>:</td>
                                <td>{{ $produk->berat }}&nbsp;kg</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td>
                                <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>
                                    @error('jumlah_pesanan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    {{-- <button type="submit" class="btn btn-dark w-100" @if($produk->ketersediaan !== 1) disabled @endif><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Masukkan Keranjang</button> --}}
                                    <a href="https://wa.me/6282387231371?text=Halo Murni!%0ASaya mau pesan:%0A%0A{{ $produk->nama }}%0Asebanyak {{ $fetch }} unit">
                                        <button type="submit" class="btn btn-dark w-100" @if($produk->ketersediaan !== 1) disabled @endif><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Masukkan Keranjang</button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </x-slot> --}}
@endsection
