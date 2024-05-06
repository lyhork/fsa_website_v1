<?php

namespace App\Filament\Resources\InstitutionalStructureResource\Pages;

use App\Filament\Resources\InstitutionalStructureResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInstitutionalStructure extends ViewRecord
{
    protected static string $resource = InstitutionalStructureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
