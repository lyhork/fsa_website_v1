<?php

namespace App\Filament\Resources\InstitutionalStructureResource\Pages;

use App\Filament\Resources\InstitutionalStructureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstitutionalStructure extends EditRecord
{
    protected static string $resource = InstitutionalStructureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
