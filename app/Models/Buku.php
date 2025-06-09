<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Buku extends Model
{
    protected $table = 'bukus';

    protected $fillable = [
        'gambar',
        'judul',
        'penulis',
        'penerbit',
        'tahun_penerbitan',
        'stok_buku',
        'abstrak',
        'kategori_buku',
        'isbn',
    ];
}
