<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use App\Models\Blog;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Blog::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Schedule Posts', Blog::where('published_at', '>', Carbon::now())->count()),
            Stat::make('This Month Posts', Blog::whereMonth('published_at', Carbon::now()->month)->count()),
        ];
    }
}
