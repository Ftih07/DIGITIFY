<?php

namespace App\Filament\Resources\GamePackages\Pages;

use App\Filament\Resources\GamePackages\GamePackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGamePackages extends ListRecords
{
    protected static string $resource = GamePackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
