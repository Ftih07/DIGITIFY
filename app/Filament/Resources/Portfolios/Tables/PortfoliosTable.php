<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Tambahkan ->disk('public') di sini ya!
                ImageColumn::make('image_path')
                    ->label('Image')
                    ->disk('public'),

                TextColumn::make('title')->searchable(),
                TextColumn::make('category')->badge(),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
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
