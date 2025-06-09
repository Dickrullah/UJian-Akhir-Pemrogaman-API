<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('bukus', function (Blueprint $table) {
        $table->id(); 
        $table->string('gambar')->nullable(); 
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->year('tahun_penerbitan');
        $table->integer('stok_buku');
        $table->text('abstrak');
        $table->enum('kategori_buku', ['Fiksi', 'Nonfiksi']);
        $table->string('isbn')->unique();
        $table->timestamps();
        });
    }
};
