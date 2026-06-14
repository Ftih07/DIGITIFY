<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenshinServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Insert Game
        $gameId = DB::table('games')->insertGetId([
            'name' => 'Genshin Impact',
            'slug' => Str::slug('Genshin Impact'),
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Insert Categories & Services
        $categories = [
            'Rawat akun' => [
                ['name' => 'Harian', 'description' => 'Daily quest + resin habis', 'price' => 5000, 'price_unit' => '/ hari', 'badge' => null],
                ['name' => 'Mingguan', 'description' => 'Daily + weekly boss + BP progress (7 hari)', 'price' => 30000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Bulanan basic', 'description' => 'Daily + weekly boss + claim BP reward', 'price' => 60000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Bulanan premium', 'description' => 'Basic + Spiral Abyss + Imaginarium Theater + Stygian Onslaught', 'price' => 90000, 'price_unit' => null, 'badge' => 'Populer'],
            ],
            'Event' => [
                ['name' => 'Event mini / hangout', 'description' => 'Per 1 event kecil / hangout quest', 'price' => 10000, 'price_max' => 15000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Event biasa', 'description' => 'Story / seasonal event per patch', 'price' => 20000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Event besar', 'description' => 'Main event dengan banyak tahapan', 'price' => 25000, 'price_max' => 35000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Semua event 1 patch', 'description' => 'Semua event current patch diselesaikan', 'price' => 50000, 'price_unit' => null, 'badge' => 'Hemat'],
            ],
            'Quest' => [
                ['name' => 'Archon quest', 'description' => 'Per chapter / part', 'price' => 12000, 'price_unit' => null, 'badge' => null],
                ['name' => 'World quest', 'description' => 'Per 1 quest dunia', 'price' => 10000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Character story quest', 'description' => 'Per karakter', 'price' => 10000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Bundle 3 world quest', 'description' => null, 'price' => 25000, 'price_unit' => null, 'badge' => 'Hemat'],
            ],
            'Upgrade karakter' => [
                ['name' => 'Ascend lv 20 -> 40', 'description' => null, 'price' => 5000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Ascend lv 40 -> 50', 'description' => null, 'price' => 7000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Ascend lv 50 -> 60', 'description' => null, 'price' => 10000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Ascend lv 60 -> 70', 'description' => null, 'price' => 13000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Ascend lv 70 -> 80', 'description' => null, 'price' => 17000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Ascend lv 80 -> 90', 'description' => null, 'price' => 22000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Full ascend (1 -> 90)', 'description' => null, 'price' => 55000, 'price_unit' => null, 'badge' => 'Hemat'],
                ['name' => 'Upgrade talent / skill', 'description' => 'Per level, makin tinggi makin mahal', 'price' => 5000, 'price_max' => 10000, 'price_unit' => null, 'badge' => null],
            ],
            'Farming material' => [
                ['name' => 'Farm 10 drop material', 'description' => null, 'price' => 5000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Farm 20 drop material', 'description' => null, 'price' => 8000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Farm 50 drop material', 'description' => null, 'price' => 15000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Domain artefak / talent (10x run)', 'description' => null, 'price' => 10000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Weekly boss', 'description' => 'Per boss, per minggu', 'price' => 8000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Normal boss', 'description' => 'Per boss, per run', 'price' => 4000, 'price_unit' => null, 'badge' => null],
            ],
            'Eksplorasi' => [
                ['name' => 'Mondstadt 100%', 'description' => null, 'price' => 45000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Liyue 100%', 'description' => null, 'price' => 50000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Dragonspine 100%', 'description' => null, 'price' => 40000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Inazuma 100%', 'description' => null, 'price' => 85000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Fontaine 100%', 'description' => null, 'price' => 45000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Natlan 100%', 'description' => null, 'price' => 50000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Nod-Krai (v6.x) 100%', 'description' => null, 'price' => 80000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Sumeru (semua wilayah)', 'description' => null, 'price' => 200000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Buka waypoint / teleport', 'description' => 'Per area / wilayah kecil', 'price' => 10000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Collect oculus per region', 'description' => 'Anemoculus, Geoculus, Electroculus, dll', 'price' => 20000, 'price_max' => 40000, 'price_unit' => null, 'badge' => null],
            ],
            'Tantangan endgame' => [
                ['name' => 'Spiral Abyss per floor', 'description' => 'Floor 9, 10, 11, atau 12 (per floor)', 'price' => 15000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Full clear Spiral Abyss (F9-12)', 'description' => null, 'price' => 50000, 'price_unit' => null, 'badge' => 'Populer'],
                ['name' => 'Imaginarium Theater', 'description' => 'Full clear 1 periode', 'price' => 25000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Stygian Onslaught', 'description' => null, 'price' => 20000, 'price_unit' => null, 'badge' => null],
            ],
        ];

        $sortOrder = 1;
        foreach ($categories as $categoryName => $services) {
            $categoryId = DB::table('service_categories')->insertGetId([
                'game_id' => $gameId,
                'name' => $categoryName,
                'sort_order' => $sortOrder++,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $serviceData = array_map(function ($service) use ($categoryId) {
                return [
                    'service_category_id' => $categoryId,
                    'name' => $service['name'],
                    'description' => $service['description'],
                    'price' => $service['price'],
                    'price_max' => $service['price_max'] ?? null,
                    'price_unit' => $service['price_unit'],
                    'badge' => $service['badge'],
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }, $services);

            DB::table('services')->insert($serviceData);
        }

        // 3. Insert Packages (Sesuai dengan nama tabel package_games di migration barumu)
        $packages = [
            [
                'tier_name' => 'Paket 1',
                'name' => 'Hemat pelajar',
                'price' => 50000,
                'price_label' => null,
                'features' => json_encode(['Rawat akun 2 minggu (daily + weekly)', '1x joki event current patch', '1x quest (world / exploration)']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 2',
                'name' => 'Bulanan basic',
                'price' => 70000,
                'price_label' => null,
                'features' => json_encode(['Rawat 1 bulan (daily + weekly + boss)', '1x event current patch', 'Hemat ±Rp 20.000 vs harga satuan']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 3',
                'name' => 'Bulanan premium',
                'price' => 120000,
                'price_label' => null,
                'features' => json_encode(['Rawat 1 bulan full (daily + weekly + boss)', 'Semua event current patch', '1x explore area kecil / menengah', 'Hemat ±Rp 35.000 vs harga satuan']),
                'badge' => 'terpopuler',
            ],
            [
                'tier_name' => 'Paket 4',
                'name' => 'Upgrade 1 karakter',
                'price' => 75000,
                'price_label' => null,
                'features' => json_encode(['Full ascend 1 karakter (1 -> 90)', 'Upgrade skill / talent level 1 -> 6', 'Farm 30 material karakter']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 5',
                'name' => 'New player starter',
                'price' => 90000,
                'price_label' => null,
                'features' => json_encode(['Story quest chapter 1 - 3', 'Explore starter region 100%', 'Full ascend 1 karakter utama']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 6',
                'name' => 'Custom request',
                'price' => null,
                'price_label' => 'Harga sesuai diskusi',
                'features' => json_encode(['Kombinasi bebas semua layanan', 'Waktu pengerjaan fleksibel', 'Negosiasi via WhatsApp / DM']),
                'badge' => null,
            ],
        ];

        $packageData = array_map(function ($package) use ($gameId) {
            return array_merge(['game_id' => $gameId, 'created_at' => now(), 'updated_at' => now()], $package);
        }, $packages);

        DB::table('package_games')->insert($packageData);
    }
}
