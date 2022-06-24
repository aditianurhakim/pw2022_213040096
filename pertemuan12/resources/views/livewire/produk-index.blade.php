@extends('layouts.app')

@section('content')
{{-- <x-slot name="showPage"> --}}
<div class="container page-container">
    <section class="produk">
        <div class="row">
            <div class="col">
                <h3><strong>{{ $title }}</strong></h3>
            </div>
        </div>

        <div class="row mt-3">
            @foreach ($produks as $produk)
            <div class="col-md-2 mb-3">
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
        <div class="row">
            <div class="col">
                {{ $produks->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
</div>
{{-- </x-slot> --}}
@endsection