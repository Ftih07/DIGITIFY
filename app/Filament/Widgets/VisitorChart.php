<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorChart extends ChartWidget
{
    // HAPUS KATA 'static' DI SINI 👇
    protected ?string $heading = 'Grafik Pengunjung (7 Hari Terakhir)';

    // Kalau $sort biarkan tetap static karena bawaan Filament memang begitu
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // ... (kodingan getData tetap sama persis seperti sebelumnya)
        $data = [];
        $labels = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $labels[] = $date->translatedFormat('d M');
            $data[] = Visitor::where('visit_date', $date->toDateString())->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Unique Visitors',
                    'data' => $data,
                    'borderColor' => '#FF8323',
                    'backgroundColor' => 'rgba(255, 131, 35, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
