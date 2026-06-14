<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->label('Kategori Halaman')
                    ->options([
                        'web_dev' => 'Web Development',
                        'game_joki' => 'Layanan Joki Game',
                    ])
                    ->default('web_dev')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('question')->required()->columnSpanFull(),
                Textarea::make('answer')->required()->columnSpanFull()->rows(4),
                TextInput::make('sort_order')->numeric()->default(0),
                Toggle::make('is_active')->default(true),
            ]);
    }
}
