<?php

namespace App\Filament\Resources\ToThePointPackages;

use App\Filament\Resources\ToThePointPackages\Pages\CreateToThePointPackage;
use App\Filament\Resources\ToThePointPackages\Pages\EditToThePointPackage;
use App\Filament\Resources\ToThePointPackages\Pages\ListToThePointPackages;
use App\Filament\Resources\ToThePointPackages\Schemas\ToThePointPackageForm;
use App\Filament\Resources\ToThePointPackages\Tables\ToThePointPackagesTable;
use App\Models\ToThePointPackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ToThePointPackageResource extends Resource
{
    protected static ?string $model = ToThePointPackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ToThePointPackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ToThePointPackagesTable::configure($table);
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
            'index' => ListToThePointPackages::route('/'),
            'create' => CreateToThePointPackage::route('/create'),
            'edit' => EditToThePointPackage::route('/{record}/edit'),
        ];
    }
}
