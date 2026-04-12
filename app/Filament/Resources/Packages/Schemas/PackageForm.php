<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('subtitle')->required()->maxLength(255),
                TextInput::make('price')->numeric()->required()->prefix('Rp'),
                Toggle::make('is_start_from')->label('Gunakan teks "Mulai dari"')->default(true),
                TextInput::make('badge')->placeholder('cth: BEST SELLER (Kosongkan jika tidak ada)'),
                TextInput::make('renewal_text')->placeholder('cth: Rp50.000/tahun (Untuk domain & server)'),
                TextInput::make('sort_order')->numeric()->default(0),

                Repeater::make('features')
                    ->label('Fitur Termasuk (Centang Hijau)')
                    ->simple(TextInput::make('feature')->required())
                    ->columnSpanFull(),

                Repeater::make('excluded_features')
                    ->label('Fitur Tidak Termasuk (Silang Merah)')
                    ->simple(TextInput::make('feature')->required())
                    ->columnSpanFull(),
            ]);
    }
}
