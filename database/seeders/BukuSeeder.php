<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = ['Fiksi', 'Nonfiksi'];

        for ($i = 1; $i <= 20; $i++) {
            Buku::create([
                'gambar' => null,
                'judul' => 'Judul Buku ' . $i,
                'penulis' => 'Penulis ' . $i,
                'penerbit' => 'Penerbit ' . $i,
                'tahun_penerbitan' => rand(2000, 2024),
                'stok_buku' => rand(1, 20),
                'abstrak' => 'Ini adalah abstrak singkat dari buku ' . $i . '. ' . Str::random(50),
                'kategori_buku' => $kategori[array_rand($kategori)],
                'isbn' => '978-3-' . rand(1000000, 9999999),
            ]);
        }
    }
}
