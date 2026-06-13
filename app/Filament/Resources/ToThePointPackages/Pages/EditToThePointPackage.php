<?php

namespace App\Filament\Resources\ToThePointPackages\Pages;

use App\Filament\Resources\ToThePointPackages\ToThePointPackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditToThePointPackage extends EditRecord
{
    protected static string $resource = ToThePointPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
