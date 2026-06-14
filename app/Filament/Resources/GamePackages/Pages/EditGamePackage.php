<?php

namespace App\Filament\Resources\GamePackages\Pages;

use App\Filament\Resources\GamePackages\GamePackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGamePackage extends EditRecord
{
    protected static string $resource = GamePackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
