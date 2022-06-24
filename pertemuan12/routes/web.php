<?php

use App\Http\Livewire\ProdukIndex;
use App\Http\Livewire\ProdukSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', App\Http\Livewire\Beranda::class)->name('beranda');
Route::get('/produk/{query?}', App\Http\Livewire\ProdukIndex::class)->name('produk');
Route::get('/produk/kategori/{kategoriId}', App\Http\Livewire\ProdukKategori::class)->name('produk.kategori');
Route::get('/produk/detail/{id}', App\Http\Livewire\ProdukDetail::class)->name('produk.detail');
