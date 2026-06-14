<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.game.name')
                    ->label('Game')
                    ->sortable()
                    ->badge()
                    ->color('info'),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Layanan')
                    ->searchable()
                    ->weight('bold'),

                // Custom kolom untuk merender harga rentang dan unit (ex: Rp 10.000 - 15.000 / hari)
                TextColumn::make('price')
                    ->label('Harga')
                    ->state(function ($record) {
                        $basePrice = 'Rp '.number_format($record->price, 0, ',', '.');
                        $maxPrice = $record->price_max ? ' - '.number_format($record->price_max, 0, ',', '.') : '';
                        $unit = $record->price_unit ? ' '.$record->price_unit : '';

                        return $basePrice.$maxPrice.$unit;
                    }),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                // UBAH DI SINI: Sesuaikan dengan nama kolom di database
                SelectFilter::make('service_category_id')
                    ->label('Filter Kategori')
                    ->relationship('category', 'name'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            // UBAH DI SINI JUGA: Sesuaikan dengan nama kolom di database
            ->defaultSort('service_category_id', 'asc');
    }
}
