<?php

namespace App\Filament\Resources\ToThePointPackages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ToThePointPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Paket To-The-Point')
                    ->description('Kelola detail paket instan yang akan ditampilkan di halaman utama.')
                    ->schema([
                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'edukasi' => 'Edukasi',
                                'event' => 'Event',
                                'fnb' => 'F&B',
                                'retail' => 'Retail & UMKM',
                                'properti' => 'Properti',
                                'services' => 'Services',
                            ])
                            ->required()
                            ->searchable()
                            ->columnSpanFull(),

                        TextInput::make('badge_label')
                            ->label('Label Badge')
                            ->placeholder('Contoh: Edukasi — SMK/SMA')
                            ->required(),

                        TextInput::make('title')
                            ->label('Nama Paket')
                            ->placeholder('Contoh: Website Portal Berita')
                            ->required(),

                        TextInput::make('price')
                            ->label('Harga')
                            ->placeholder('Contoh: Mulai Rp100.000')
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0)
                            ->helperText('Angka lebih kecil akan tampil lebih dulu di website.'),

                        Textarea::make('description')
                            ->label('Deskripsi Pendek')
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->helperText('Matikan jika paket sedang tidak tersedia.')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}
