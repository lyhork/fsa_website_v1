<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use App\Models\Blog;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class PostsPerMonthChart extends ChartWidget
{
    protected static ?string $heading = 'Post Chart';

    protected int | string | array $columnSpan = 'full';

    protected static ?string $maxHeight = '380px';

    protected function getData(): array
    {
        $data = Trend::model(Blog::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->dateColumn('published_at')
        ->count();

    return [
        'datasets' => [
            [
                'label' => 'Blog posts',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
