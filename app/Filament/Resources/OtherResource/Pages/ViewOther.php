<?php

namespace App\Filament\Resources\OtherResource\Pages;

use App\Filament\Resources\OtherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOther extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = OtherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
        ];
    }
}
