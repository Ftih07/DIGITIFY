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
        Schema::create('to_the_point_packages', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // 'edukasi', 'event', 'fnb', 'retail', 'properti', 'services'
            $table->string('badge_label'); // Contoh: "Edukasi — SMK/SMA"
            $table->string('title');
            $table->string('price'); // Contoh: "Mulai Rp100.000"
            $table->text('description');
            $table->unsignedTinyInteger('sort_order')->default(0); // Untuk custom urutan tampil
            $table->boolean('is_active')->default(true); // Paket aktif/tidak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_the_point_packages');
    }
};
