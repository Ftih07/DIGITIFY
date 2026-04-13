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
        Schema::table('packages', function (Blueprint $table) {
            // Mengubah price dari integer ke string agar bisa simpan "1.5 - 2.9jt"
            $table->string('price')->change();

            // Menambah kolom theme untuk styling kartu (light, highlight, dark)
            $table->string('theme')->default('light')->after('is_start_from');

            // Menambah kolom bonus_text untuk kotak bonus di tengah fitur
            $table->string('bonus_text')->nullable()->after('badge');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            // Kembalikan price ke integer jika di-rollback
            $table->integer('price')->change();

            // Hapus kolom yang tadi ditambahkan
            $table->dropColumn(['theme', 'bonus_text']);
        });
    }
};
