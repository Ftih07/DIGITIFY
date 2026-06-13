<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Peta perubahan dari data LAMA ke data BARU
        $mapping = [
            'WEB TEMPLATE' => 'Starter Template',
            'WEB DENGAN CMS' => 'Semi-Custom',
            'WEB CUSTOM' => 'Full Custom',
            'E-COMMERCE & POS' => 'Enterprise / SaaS',
        ];

        foreach ($mapping as $oldCategory => $newCategory) {
            DB::table('portfolios')
                ->where('category', $oldCategory)
                ->update(['category' => $newCategory]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Logika rollback untuk mengembalikan ke data semula jika diperlukan
        $mappingBack = [
            'Starter Template' => 'WEB TEMPLATE',
            'Semi-Custom' => 'WEB DENGAN CMS',
            'Full Custom' => 'WEB CUSTOM',
            'Enterprise / SaaS' => 'E-COMMERCE & POS',
        ];

        foreach ($mappingBack as $newCategory => $oldCategory) {
            DB::table('portfolios')
                ->where('category', $newCategory)
                ->update(['category' => $oldCategory]);
        }
    }
};
