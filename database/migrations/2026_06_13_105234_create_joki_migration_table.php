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
        // 1. Create Games Table (Untuk memisahkan Genshin, Wuwa, dll)
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Contoh: Genshin Impact, Wuthering Waves
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Create Service Categories Table (Untuk tab 'Rawat akun', 'Event', 'Quest', dll)
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('name'); // Contoh: Rawat akun, Eksplorasi
            $table->integer('sort_order')->default(0); // Penting agar urutan kategori rapi di frontend
            $table->timestamps();
        });

        // 3. Create Services Table (Untuk list harga per item)
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->constrained()->cascadeOnDelete();
            $table->string('name'); // Contoh: Harian, Mingguan, Full clear Spiral Abyss
            $table->string('description')->nullable(); // Teks kecil di bawah nama (ex: "Daily quest + resin habis")
            $table->integer('price'); // Harga dasar/minimal (Gunakan integer untuk Rupiah)
            $table->integer('price_max')->nullable(); // Jika harganya range (ex: Rp 10.000 - 15.000)
            $table->string('price_unit')->nullable(); // Contoh: "/ hari", "per floor"
            $table->string('badge')->nullable(); // Untuk label "Populer", "Hemat"
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 4. Create Packages Table (Untuk tab 'Paket Bundle')
        Schema::create('package_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('tier_name'); // Contoh: Paket 1, Paket 2
            $table->string('name'); // Contoh: Hemat pelajar, Bulanan basic
            $table->integer('price')->nullable(); // Nullable karena ada "Custom request" (Harga sesuai diskusi)
            $table->string('price_label')->nullable(); // Untuk override teks harga (ex: "Harga sesuai diskusi")
            $table->json('features'); // Array JSON untuk list checklist (ex: ["Rawat akun 2 minggu", "1x joki event"])
            $table->string('badge')->nullable(); // Untuk label "terpopuler"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_categories');
        Schema::dropIfExists('games');
    }
};
