<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StudentStats;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $title = ' ';

    public function getWidgets(): array
    {
        return [
            StudentStats::class,
        ];
    }
}
