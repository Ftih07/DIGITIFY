<?php

namespace App\Filament\Resources\GamePackages\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GamePackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Paket Bundle')
                    ->description('Kelola paket joki bulanan atau starter pack.')
                    ->schema([
                        Select::make('game_id')
                            ->label('Pilih Game')
                            ->relationship('game', 'name') // Mengambil relasi dari model Game
                            ->required()
                            ->searchable()
                            ->columnSpanFull(),

                        TextInput::make('tier_name')
                            ->label('Nama Tier')
                            ->placeholder('Contoh: Paket 1, Paket 2')
                            ->required(),

                        TextInput::make('name')
                            ->label('Nama Paket')
                            ->placeholder('Contoh: Hemat pelajar, Bulanan premium')
                            ->required(),

                        TextInput::make('price')
                            ->label('Harga (Rp)')
                            ->numeric()
                            ->placeholder('Kosongkan jika harga sesuai diskusi')
                            ->prefix('Rp'),

                        TextInput::make('price_label')
                            ->label('Label Harga (Opsional)')
                            ->placeholder('Contoh: Harga sesuai diskusi')
                            ->helperText('Isi jika ingin menimpa angka harga dengan teks.'),

                        TextInput::make('badge')
                            ->label('Label Badge (Opsional)')
                            ->placeholder('Contoh: Terpopuler, Hemat'),

                        Repeater::make('features')
                            ->label('Daftar Fitur / Layanan')
                            ->simple(
                                TextInput::make('feature')
                                    ->required()
                                    ->placeholder('Contoh: Rawat akun 2 minggu (daily + weekly)')
                            )
                            ->addActionLabel('Tambah Fitur')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}
