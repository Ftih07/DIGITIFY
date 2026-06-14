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
        // Tambah kolom 'type' di tabel portfolios
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('type')->default('web_dev')->after('id')
                ->comment('web_dev atau game_joki');
        });

        // Tambah kolom 'type' di tabel faqs
        Schema::table('faqs', function (Blueprint $table) {
            $table->string('type')->default('web_dev')->after('id')
                ->comment('web_dev atau game_joki');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('type');
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
