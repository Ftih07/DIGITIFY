<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorStatsOverview extends BaseWidget
{
    // Urutan prioritas muncul di dashboard
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $today = Visitor::where('visit_date', Carbon::today()->toDateString())->count();
        $thisMonth = Visitor::whereMonth('visit_date', Carbon::now()->month)
            ->whereYear('visit_date', Carbon::now()->year)
            ->count();
        $total = Visitor::count();

        return [
            Stat::make('Pengunjung Hari Ini', $today)
                ->description('Unique visitors hari ini')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Pengunjung Bulan Ini', $thisMonth)
                ->description('Total bulan ' . Carbon::now()->translatedFormat('F')),

            Stat::make('Total Pengunjung Keseluruhan', $total),
        ];
    }
}
