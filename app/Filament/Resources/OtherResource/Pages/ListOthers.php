<?php

namespace App\Filament\Resources\OtherResource\Pages;

use App\Filament\Resources\OtherResource;
use App\Filament\Resources\OtherResource\Widgets\OtherStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOthers extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = OtherResource::class;

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
            OtherStatsOverview::class,
        ];
    }
}
