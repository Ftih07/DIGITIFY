<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioForm
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
                TextInput::make('title')->required(),
                Select::make('category')
                    ->options([
                        'Starter Template' => 'Starter Template',
                        'Semi-Custom' => 'Semi-Custom',
                        'Full Custom' => 'Full Custom',
                        'Enterprise / SaaS' => 'Enterprise / SaaS',
                    ])
                    ->required(),
                TextInput::make('preview_link')->url()->placeholder('https://...'),
                FileUpload::make('image_path')->image()->directory('portfolios')->required()->columnSpanFull()->disk('public'),
                Textarea::make('description')->required()->columnSpanFull(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Angka lebih kecil akan muncul lebih dulu (di atas).')
                    ->required(),
            ]);
    }
}
