<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan')
                    ->schema([
                        Select::make('service_category_id')
                            ->label('Kategori Layanan')
                            // Mengambil nama kategori dan game-nya agar tidak bingung (ex: "Eksplorasi - Genshin Impact")
                            ->relationship('category', 'name')
                            ->required()
                            ->searchable()
                            ->columnSpanFull(),

                        TextInput::make('name')
                            ->label('Nama Layanan')
                            ->placeholder('Contoh: Harian, Full clear Spiral Abyss')
                            ->required(),

                        TextInput::make('badge')
                            ->label('Label Badge (Opsional)')
                            ->placeholder('Contoh: Populer, Hemat'),

                        Textarea::make('description')
                            ->label('Deskripsi Singkat (Opsional)')
                            ->placeholder('Contoh: Daily quest + resin habis')
                            ->rows(2)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Pengaturan Harga')
                    ->schema([
                        TextInput::make('price')
                            ->label('Harga Minimal/Dasar (Rp)')
                            ->numeric()
                            ->required()
                            ->prefix('Rp'),

                        TextInput::make('price_max')
                            ->label('Harga Maksimal (Opsional)')
                            ->numeric()
                            ->prefix('Rp')
                            ->helperText('Isi jika layanan ini berupa rentang harga (ex: Rp 10.000 - 15.000)'),

                        TextInput::make('price_unit')
                            ->label('Unit Harga (Opsional)')
                            ->placeholder('Contoh: / hari, / floor')
                            ->helperText('Teks tambahan di belakang harga.'),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->columnSpanFull(),
                    ])->columns(3),
            ]);
    }
}
