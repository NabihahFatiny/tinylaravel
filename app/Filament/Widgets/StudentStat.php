<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StudentStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Students', Student::count())
                ->description('All students in the system')
                ->icon('heroicon-o-users'),

            Stat::make('Total Courses', Student::distinct('course')->count('course'))
                ->description('Different courses available')
                ->icon('heroicon-o-book-open'),

            Stat::make('Diploma Students', Student::where('course', 'like', '%Diploma%')->count())
                ->description('Students in diploma courses')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Degree Students', Student::where('course', 'like', '%Bachelor%')->count())
                ->description('Students in degree courses')
                ->icon('heroicon-o-building-library'),
        ];
    }
}
