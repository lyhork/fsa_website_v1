<?php

namespace App\Filament\Resources\InstitutionalStructureResource\Pages;

use App\Filament\Resources\InstitutionalStructureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstitutionalStructures extends ListRecords
{
    protected static string $resource = InstitutionalStructureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
