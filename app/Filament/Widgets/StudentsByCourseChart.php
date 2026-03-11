<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\ChartWidget;

class StudentsByCourseChart extends ChartWidget
{
    protected ?string $heading = 'Students by Course';

    protected function getData(): array
    {
        $courses = Student::selectRaw('course, COUNT(*) as total')
            ->groupBy('course')
            ->pluck('total', 'course');

        $labels = $courses->keys()->map(function ($course) {
            return match ($course) {
                'Diploma in Computer Science' => 'Diploma CS',
                'Bachelor of Computer Science (Software Engineering) with Honours' => 'Software Eng',
                'Bachelor of Computer Science (Cyber Security) with Honours' => 'Cyber Security',
                'Bachelor of Computer Science (Computer Systems & Networking) with Honours' => 'Comp System',
                'Bachelor of Computer Science (Multimedia Software) with Honours' => 'Multimedia',
                'Dual Degree Program – Bachelor of Computer Science (Software Engineering) with Honours' => 'Dual Degree SE',
                default => $course,
            };
        });

        return [
            'datasets' => [
                [
                    'label' => 'Students',
                    'data' => $courses->values()->toArray(),
                ],
            ],
            'labels' => $labels->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
