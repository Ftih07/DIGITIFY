<?php

namespace App\Filament\Resources\ToThePointPackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ToThePointPackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Paket')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'edukasi' => 'info',
                        'event' => 'primary',
                        'fnb' => 'success',
                        'retail' => 'success',
                        'properti' => 'warning',
                        'services' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('price')
                    ->label('Harga'),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable()
                    ->alignCenter(),
            ])
            ->filters([
                // INI ADALAH FITUR FILTER PER KATEGORI DI TABEL FILAMENT
                SelectFilter::make('category')
                    ->label('Filter Kategori')
                    ->options([
                        'edukasi' => 'Edukasi',
                        'event' => 'Event',
                        'fnb' => 'F&B',
                        'retail' => 'Retail & UMKM',
                        'properti' => 'Properti',
                        'services' => 'Services',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc'); // Tabel otomatis urut berdasarkan urutan tampil
    }
}
