<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStaff extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = StaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
