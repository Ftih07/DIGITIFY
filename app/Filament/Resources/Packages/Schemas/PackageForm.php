<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->placeholder('cth: Web Custom'),
                TextInput::make('subtitle')->required()->placeholder('cth: Landing Page Kilat'),

                // Ubah ke string agar bisa tulis "1.5 - 2.9jt"
                TextInput::make('price')->required()->placeholder('cth: 300 - 800rb'),

                Toggle::make('is_start_from')->label('Gunakan teks "Mulai dari"')->default(true),

                // Tambahkan pilihan tema kartu
                Select::make('theme')
                    ->options([
                        'light' => 'Light (Default)',
                        'highlight' => 'Highlight (Border Orange)',
                        'dark' => 'Dark (Premium)',
                    ])->default('light'),

                TextInput::make('badge')->placeholder('cth: BEST SELLER'),

                // Field untuk kotak bonus di tengah fitur
                TextInput::make('bonus_text')->placeholder('cth: Bonus Domain .com + Hosting 1 Tahun'),

                TextInput::make('renewal_text')->placeholder('cth: Perpanjangan: Rp500.000/tahun'),

                TextInput::make('sort_order')->numeric()->default(0),

                Repeater::make('features')
                    ->label('Fitur Termasuk (Centang)')
                    ->simple(TextInput::make('feature')->required())
                    ->columnSpanFull(),

                Repeater::make('excluded_features')
                    ->label('Fitur Tidak Termasuk (Silang)')
                    ->simple(TextInput::make('feature')->required())
                    ->columnSpanFull(),
            ]);
    }
}
