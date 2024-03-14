<?php

namespace App\Filament\Resources\SlideshowResource\Pages;

use App\Filament\Resources\SlideshowResource;
use App\Filament\Resources\SlideshowResource\Widgets\SlideshowStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSlideshows extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SlideshowResource::class;

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
            SlideshowStatsOverview::class,
        ];
    }
}
