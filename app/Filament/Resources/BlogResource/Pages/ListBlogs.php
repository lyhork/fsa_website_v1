<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Filament\Resources\BlogResource\Widgets\BlogStatsWidget;
use App\Filament\Resources\BlogResource\Widgets\PostsPerMonthChart;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BlogResource::class;

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
            BlogStatsWidget::class,
        ];
    }

    // protected function getFooterWidgets(): array
    // {
    //     return [
    //         PostsPerMonthChart::class,
    //     ];
    // }
}
