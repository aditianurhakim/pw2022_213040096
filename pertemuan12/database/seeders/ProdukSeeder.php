<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'nama' => 'Semen Padang',
            'gambar' => 'gambar-semen.png',
            'harga' => 70000,
            'kategori_id' => 1
        ]);

        DB::table('produks')->insert([
            'nama' => 'Palu Tekiro',
            'gambar' => 'gambar-palu.png',
            'harga' => 39000,
            'kategori_id' => 2
        ]);

        DB::table('produks')->insert([
            'nama' => 'Pipa Ariston',
            'gambar' => 'gambar-pipa.png',
            'harga' => 48000,
            'kategori_id' => 3
        ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Mur Baut',
        //     'gambar' => 'gambar-baut.png',
        //     'harga' => 500,
        //     'kategori_id' => 4
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Cat Tembok',
        //     'gambar' => 'gambar-cat.png',
        //     'harga' => 100000,
        //     'kategori_id' => 5
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Lem Kayu',
        //     'gambar' => 'gambar-lem.png',
        //     'harga' => 10000,
        //     'kategori_id' => 6
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Lem Dummy',
        //     'gambar' => 'dummy.png',
        //     'harga' => 30000,
        //     'kategori_id' => 6
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Lem Besi Dummy',
        //     'gambar' => 'Dummy.png',
        //     'harga' => 12000,
        //     'kategori_id' => 6
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Lem Kertas Dummy',
        //     'gambar' => 'Dummy.png',
        //     'harga' => 5000,
        //     'kategori_id' => 6
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Cat Dummy',
        //     'gambar' => 'dummy.png',
        //     'harga' => 200000,
        //     'kategori_id' => 5
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Cat Tembok Dummy',
        //     'gambar' => 'dummy.png',
        //     'harga' => 80000,
        //     'kategori_id' => 5
        // ]);

        // DB::table('produks')->insert([
        //     'nama' => 'Cat Kayu Dummy',
        //     'gambar' => 'dummy.png',
        //     'harga' => 70000,
        //     'kategori_id' => 5
        // ]);
    }
}
