<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFonts extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = FontResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
