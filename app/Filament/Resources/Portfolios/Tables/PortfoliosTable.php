<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->label('Halaman')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'web_dev' => 'info',
                        'game_joki' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'web_dev' => 'Web Dev',
                        'game_joki' => 'Joki Game',
                        default => $state,
                    }),
                ImageColumn::make('image_path')
                    ->label('Image')
                    ->disk('public'),

                TextColumn::make('title')->searchable(),
                TextColumn::make('category')->badge(),
                TextColumn::make('sort_order')->sortable(),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order', 'asc')
            ->filters([
                SelectFilter::make('type')
                    ->label('Filter Halaman')
                    ->options([
                        'web_dev' => 'Web Development',
                        'game_joki' => 'Joki Game',
                    ]),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
