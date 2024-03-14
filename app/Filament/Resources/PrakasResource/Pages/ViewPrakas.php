<?php

namespace App\Filament\Resources\PrakasResource\Pages;

use App\Filament\Resources\PrakasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPrakas extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = PrakasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
        ];
    }
}
