<?php

namespace App\Filament\Resources\ToThePointPackages\Pages;

use App\Filament\Resources\ToThePointPackages\ToThePointPackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListToThePointPackages extends ListRecords
{
    protected static string $resource = ToThePointPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
