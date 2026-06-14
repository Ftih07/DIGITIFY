<?php

namespace App\Filament\Resources\GamePackages;

use App\Filament\Resources\GamePackages\Pages\CreateGamePackage;
use App\Filament\Resources\GamePackages\Pages\EditGamePackage;
use App\Filament\Resources\GamePackages\Pages\ListGamePackages;
use App\Filament\Resources\GamePackages\Schemas\GamePackageForm;
use App\Filament\Resources\GamePackages\Tables\GamePackagesTable;
use App\Models\PackageGames;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GamePackageResource extends Resource
{
    protected static ?string $model = PackageGames::class;

    protected static ?string $navigationLabel = 'Paket Bundle Joki';

    protected static string|\UnitEnum|null $navigationGroup = 'Game Services';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSparkles;

    public static function form(Schema $schema): Schema
    {
        return GamePackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GamePackagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGamePackages::route('/'),
            'create' => CreateGamePackage::route('/create'),
            'edit' => EditGamePackage::route('/{record}/edit'),
        ];
    }
}
