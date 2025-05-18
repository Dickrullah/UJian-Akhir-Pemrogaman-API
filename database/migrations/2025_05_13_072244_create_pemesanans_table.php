<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('pemesanans', function (Blueprint $table) {
        $table->id();
        $table->string('nomor_ruangan');
        $table->string('nama_pemesan');
        $table->string('nama_kegiatan');
        $table->date('tanggal');
        $table->time('waktu_mulai');
        $table->time('waktu_selesai');
        $table->enum('status', ['pending', 'approved'])->default('pending');
        $table->string('nomor_hp');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
