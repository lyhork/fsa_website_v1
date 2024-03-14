<?php

namespace App\Filament\Resources\SlideshowResource\Widgets;

use App\Models\Slideshow;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SlideshowStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Slideshow', Slideshow::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-cloud-arrow-up',IconPosition::Before)
                ->chart([30, 10, 50, 10, 20, 40])
                ->color('success'),
        ];
    }
}
