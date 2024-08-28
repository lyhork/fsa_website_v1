<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use Filament\Resources\Pages\ViewRecord;

class ViewQrCodeStaff extends ViewRecord
{
    protected static string $resource = StaffResource::class;

    protected static string $view = 'filament.resources.staff-resource.pages.view-qr-code';

    protected function getActions(): array
    {
        return [];
    }
}
