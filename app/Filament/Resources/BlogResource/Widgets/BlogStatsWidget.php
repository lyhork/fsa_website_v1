<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use App\Models\Blog;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Blog::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-cloud-arrow-up',IconPosition::Before)
                ->chart([20, 10, 20, 10, 30, 40])
                ->color('success'),
            Stat::make('Schedule Posts', Blog::where('published_at', '>', Carbon::now())->count())
                ->chart([2, 6, 20, 7, 30, 20])
                ->color('danger'),
            Stat::make('This Month Posts', Blog::whereMonth('published_at', Carbon::now()->month)->count())
                ->chart([10, 40, 23, 5, 28, 5])
                ->color('info'),
            Stat::make('Disactive Posts', Blog::where('status', '=', '0')->count())
                ->chart([2, 8, 10, 5, 20, 5])
                ->color('danger'),
        ];
    }
}
