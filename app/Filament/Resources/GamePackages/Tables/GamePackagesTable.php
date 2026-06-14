<?php

namespace App\Filament\Resources\GamePackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class GamePackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('game.name')
                    ->label('Game')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color('info'),

                TextColumn::make('tier_name')
                    ->label('Tier')
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('name')
                    ->label('Nama Paket')
                    ->searchable(),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', locale: 'id') // Format otomatis Rupiah
                    ->default(fn ($record) => $record->price_label ?? '-'), // Fallback ke price_label jika null

                TextColumn::make('badge')
                    ->label('Badge')
                    ->badge()
                    ->color(fn (string $state): string => match (strtolower($state)) {
                        'terpopuler', 'populer' => 'warning',
                        'hemat' => 'success',
                        default => 'gray',
                    }),
            ])
            ->filters([
                SelectFilter::make('game_id')
                    ->label('Filter Game')
                    ->relationship('game', 'name'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('game_id', 'asc');
    }
}
