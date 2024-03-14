<?php

namespace App\Filament\Resources\PrakasResource\Pages;

use App\Filament\Resources\PrakasResource;
use App\Filament\Resources\PrakasResource\Widgets\PrakasStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrakas extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PrakasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            PrakasStatsOverview::class,
        ];
    }
}
