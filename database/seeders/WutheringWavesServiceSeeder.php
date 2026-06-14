<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WutheringWavesServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Insert Game
        $gameId = DB::table('games')->insertGetId([
            'name' => 'Wuthering Waves',
            'slug' => Str::slug('Wuthering Waves'),
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Insert Categories & Services
        $categories = [
            'Rawat akun' => [
                ['name' => 'Harian', 'description' => 'Daily mission + waveplate optional', 'price' => 5000, 'price_max' => null, 'price_unit' => '/ hari', 'badge' => null],
                ['name' => 'Mingguan', 'description' => 'Daily + weekly boss + BP + Fantasies of 1000 Gateways', 'price' => 30000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Bulanan basic', 'description' => 'Daily + weekly boss + claim BP reward', 'price' => 60000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Bulanan premium', 'description' => 'Basic + Tower of Adversity + Hologram Boss Challenge', 'price' => 90000, 'price_max' => null, 'price_unit' => null, 'badge' => 'Populer'],
            ],
            'Event' => [
                ['name' => 'Event mini / kecil', 'description' => 'Per event, konten singkat', 'price' => 12000, 'price_max' => 15000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Event biasa', 'description' => 'Story / seasonal event dalam 1 patch', 'price' => 20000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Semua event 1 patch', 'description' => 'Semua event current patch diselesaikan', 'price' => 45000, 'price_max' => null, 'price_unit' => null, 'badge' => 'Hemat'],
            ],
            'Quest' => [
                ['name' => 'Main story quest', 'description' => 'Per chapter / act', 'price' => 12000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Exploration quest', 'description' => 'Per quest eksplorasi', 'price' => 8000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Companion story quest', 'description' => 'Per resonator / karakter', 'price' => 10000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
            ],
            'Upgrade resonator' => [
                ['name' => 'Level up 10 -> 20', 'description' => null, 'price' => 10000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Level up 20 -> 40', 'description' => null, 'price' => 15000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Level up 40 -> 60', 'description' => null, 'price' => 20000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Level up 60 -> 80', 'description' => null, 'price' => 25000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Full level up (1 -> 90)', 'description' => null, 'price' => 55000, 'price_max' => null, 'price_unit' => null, 'badge' => 'Hemat'],
                ['name' => 'Upgrade forte / skill', 'description' => 'Per level, makin tinggi makin mahal', 'price' => 5000, 'price_max' => 10000, 'price_unit' => null, 'badge' => null],
            ],
            'Farming & echo' => [
                ['name' => 'Farm echo', 'description' => 'Per 20 echo drop', 'price' => 12000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Farm material karakter / senjata', 'description' => null, 'price' => 10000, 'price_max' => 15000, 'price_unit' => null, 'badge' => null],
                ['name' => 'Tacet discord boss', 'description' => 'Per boss, per run', 'price' => 5000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Overlord / field boss', 'description' => 'Per boss, per run', 'price' => 8000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Waveplate farming custom', 'description' => 'Per 240 waveplate', 'price' => 15000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
            ],
            'Eksplorasi' => [
                ['name' => 'Jinzhou 100%', 'description' => null, 'price' => 18000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Black Shores 100%', 'description' => null, 'price' => 22000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Mt. Firmament 100%', 'description' => null, 'price' => 38000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Whimpering Wastes 100%', 'description' => null, 'price' => 40000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Rinascita 100%', 'description' => null, 'price' => 200000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Lahai-Roi 100%', 'description' => null, 'price' => 150000, 'price_max' => null, 'price_unit' => null, 'badge' => 'Baru v3.0'],
                ['name' => 'Collect sonance casket', 'description' => 'Per region', 'price' => 15000, 'price_max' => 25000, 'price_unit' => null, 'badge' => null],
            ],
            'Tower of Adversity (TOA)' => [
                ['name' => 'TOA per floor', 'description' => null, 'price' => 10000, 'price_max' => null, 'price_unit' => null, 'badge' => null],
                ['name' => 'Full clear TOA', 'description' => null, 'price' => 45000, 'price_max' => null, 'price_unit' => null, 'badge' => 'Populer'],
                ['name' => 'Hologram boss challenge', 'description' => 'Per tier / tingkat kesulitan', 'price' => 15000, 'price_max' => 25000, 'price_unit' => null, 'badge' => null],
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

        // 3. Insert Packages (Istilah disesuaikan dengan Wuthering Waves)
        $packages = [
            [
                'tier_name' => 'Paket 1',
                'name' => 'Hemat pelajar',
                'price' => 50000,
                'price_label' => null,
                'features' => json_encode(['Rawat akun 2 minggu (daily + weekly boss)', '1x joki event current patch', '1x exploration quest']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 2',
                'name' => 'Bulanan basic',
                'price' => 70000,
                'price_label' => null,
                'features' => json_encode(['Rawat 1 bulan (daily + weekly + BP)', '1x event biasa current patch', 'Hemat ±Rp 20.000 vs harga satuan']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 3',
                'name' => 'Bulanan premium',
                'price' => 120000,
                'price_label' => null,
                'features' => json_encode(['Rawat 1 bulan full (daily + weekly + BP)', 'Semua event current patch', '1x clear TOA (sesuai build)', 'Hemat ±Rp 35.000 vs harga satuan']),
                'badge' => 'terpopuler',
            ],
            [
                'tier_name' => 'Paket 4',
                'name' => 'Upgrade 1 Resonator',
                'price' => 75000,
                'price_label' => null,
                'features' => json_encode(['Full level up 1 resonator (1 -> 90)', 'Upgrade forte / skill (utama)', 'Farm 30 material bos resonator']),
                'badge' => null,
            ],
            [
                'tier_name' => 'Paket 5',
                'name' => 'New player starter',
                'price' => 90000,
                'price_label' => null,
                'features' => json_encode(['Main story quest act awal', 'Explore Jinzhou 100%', 'Full level up 1 resonator utama']),
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
