<?php

namespace App\Filament\Resources\PressReleaseResource\Widgets;

use App\Models\PressRelease;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PressReleaseStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total PressRelease', PressRelease::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-cloud-arrow-up',IconPosition::Before)
                ->chart([8, 30, 10, 1, 5, 16])
                ->color('success'),
            Stat::make('Schedule PressRelease Posts', PressRelease::where('published_at', '>', Carbon::now())->count())
                ->chart([2, 8, 10, 5, 20, 5])
                ->color('danger'),
            Stat::make('This Month PressRelease Posts', PressRelease::whereMonth('published_at', Carbon::now()->month)->count())
                ->chart([10, 10, 3, 20, 2, 20])
                ->color('info'),
            Stat::make('Disactive PressRelease Posts', PressRelease::where('status', '=', '0')->count())
                ->chart([2, 8, 10, 5, 20, 5])
                ->color('danger'),
        ];
    }
}
