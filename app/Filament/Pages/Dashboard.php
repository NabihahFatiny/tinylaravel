<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\LatestStudents;
use App\Filament\Widgets\StudentStats;
use App\Filament\Widgets\StudentsByCourseChart;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $title = 'Dashboard';

    public function getWidgets(): array
    {
        return [
            StudentStats::class,
            StudentsByCourseChart::class,
            LatestStudents::class,
        ];
    }
}
