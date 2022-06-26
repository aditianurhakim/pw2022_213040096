@extends('layouts.app')

@section('content')
{{-- <x-slot name="showPage"> --}}
<div class="container .page-container">

    {{-- PILIH KATEGORI --}}
    <section class="pilih-kategori">
        <h3 class="text-center"><strong>Kategori</strong></h3>
        <div class="row mt-4">
            @foreach ($kategoris as $kategori)
            <div class="col">
                <a href="{{ route('produk.kategori', $kategori->id) }}">
                    <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/kategori') }}/{{ $kategori->gambar }}" class="img-fluid">
                    </div>
                </div>
                <h6 class="text-center mt-2 mb-4 link"><strong>{{ $kategori->nama }}</strong></h6>
                </a>
            </div>  
            @endforeach        
        </div>
    </section>

    {{-- BANNER --}}
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.jpg') }}" alt="">
    </div>

    {{-- PRODUK UNGGULAN --}}
    <section class="produk mt-5 mb-5">
        <h3 class="row"><strong>Produk Unggulan</strong></h3>
        <div class="row mt-4">
            @foreach ($produks as $produk)
            <div class="col-md-2">
                <div class="card shadow">
                    <a href="{{ route('produk.detail', $produk->id) }}" class="link"><div class="card-body text-center">
                        <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5><strong>{{ $produk->nama }}</strong></h5>
                                <p>Rp{{ number_format($produk->harga,0,',','.') }}</p>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>
            @endforeach        
        </div>
    </section>
</div>    
{{-- </x-slot> --}}
@endsection
