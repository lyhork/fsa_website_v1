<?php

namespace App\Filament\Resources\OtherResource\Widgets;

use App\Models\Other;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OtherStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Other', Other::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-cloud-arrow-up',IconPosition::Before)
                ->chart([3, 10, 50, 1, 20, 10])
                ->color('success'),
            Stat::make('Schedule Other Posts', Other::where('published_at', '>', Carbon::now())->count())
                ->chart([2, 5, 10, 5, 10, 0])
                ->color('danger'),
            Stat::make('This Month Other Posts', Other::whereMonth('published_at', Carbon::now()->month)->count())
                ->chart([10, 20, 3, 10, 2, 10])
                ->color('info'),
            Stat::make('Disactive Other Posts', Other::where('status', '=', '0')->count())
                ->chart([2, 8, 10, 5, 20, 5])
                ->color('danger'),
        ];
    }
}
