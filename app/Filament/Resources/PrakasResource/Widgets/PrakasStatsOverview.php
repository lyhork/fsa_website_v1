<?php

namespace App\Filament\Resources\PrakasResource\Widgets;

use App\Models\Prakas;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PrakasStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Prakas', Prakas::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-cloud-arrow-up',IconPosition::Before)
                ->chart([3, 10, 50, 1, 20, 10])
                ->color('success'),
            Stat::make('Schedule Prakas Posts', Prakas::where('published_at', '>', Carbon::now())->count())
                ->chart([2, 5, 10, 5, 10, 0])
                ->color('danger'),
            Stat::make('This Month Prakas Posts', Prakas::whereMonth('published_at', Carbon::now()->month)->count())
                ->chart([10, 20, 3, 10, 2, 10])
                ->color('info'),
        ];
    }
}
