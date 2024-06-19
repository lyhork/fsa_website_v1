<?php

namespace App\Filament\Resources\PressReleaseResource\Pages;

use App\Filament\Resources\PressReleaseResource;
use App\Filament\Resources\PressReleaseResource\Widgets\PressReleaseStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPressReleases extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PressReleaseResource::class;

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
            PressReleaseStatsOverview::class,
        ];
    }
}
