<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'nama' => 'Material Bangunan',
            'gambar' => 'icon-material-bangunan.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Perkakas',
            'gambar' => 'icon-perkakas.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Ledeng',
            'gambar' => 'icon-ledeng.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Baut & Mur Pengencang',
            'gambar' => 'icon-baut&mur.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Cat & Perlengkapan',
            'gambar' => 'icon-cat&perlengkapan.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Tape & Sealant Perekat',
            'gambar' => 'icon-tape&sealant.png',
        ]);
    }
}
