<?php

namespace App\Filament\Resources\DocumentResource\Widgets;

use App\Models\Document;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DocumentStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Documents', Document::count())
                ->description('All Post')
                ->descriptionIcon('heroicon-m-cloud-arrow-up',IconPosition::Before)
                ->chart([30, 10, 50, 10, 20, 40])
                ->color('success'),
            Stat::make('Schedule Documents Posts', Document::where('published_at', '>', Carbon::now())->count())
                ->chart([2, 10, 10, 25, 30, 30])
                ->color('danger'),
            Stat::make('This Month Documents Posts', Document::whereMonth('published_at', Carbon::now()->month)->count())
                ->chart([20, 40, 33, 10, 28, 10])
                ->color('info'),
        ];
    }
}
