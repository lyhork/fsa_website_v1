<?php

namespace App\Filament\Resources\ManagerProfileResource\Pages;

use App\Filament\Resources\ManagerProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewManagerProfile extends ViewRecord
{
    protected static string $resource = ManagerProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
