<?php

namespace App\Filament\Resources\MainSpeechResource\Pages;

use App\Filament\Resources\MainSpeechResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainSpeeches extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = MainSpeechResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
