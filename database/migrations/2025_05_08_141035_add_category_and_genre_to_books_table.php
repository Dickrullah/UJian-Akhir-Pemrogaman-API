<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('category')->after('cover'); // fiksi / nonfiksi
            $table->string('genre')->nullable()->after('category'); // misal: horor, sejarah
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['category', 'genre']);
        });
    }
};
