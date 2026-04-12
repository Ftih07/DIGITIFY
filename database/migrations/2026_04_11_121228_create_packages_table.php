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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // cth: Web Template
            $table->string('subtitle'); // cth: Landing Page Kilat
            $table->integer('price'); // cth: 200000
            $table->boolean('is_start_from')->default(true); // Untuk label "Mulai dari"
            $table->string('badge')->nullable(); // cth: BEST SELLER, PREMIUM, PAKET LOKAL
            $table->json('features'); // Array list fitur (centang hijau)
            $table->json('excluded_features')->nullable(); // Array list fitur (silang merah)
            $table->string('renewal_text')->nullable(); // Teks perpanjangan di bawah
            $table->integer('sort_order')->default(0); // Buat ngurutin posisi paket
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
