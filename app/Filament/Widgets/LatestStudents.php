<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestStudents extends TableWidget
{
    protected static ?string $heading = 'Latest Students';

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Student::query()->latest()
            )
            ->columns([
                TextColumn::make('name')
                    ->label('Student Name'),

                TextColumn::make('course')
                    ->label('Course')
                    ->wrap(),

                TextColumn::make('created_at')
                    ->label('Added Date')
                    ->dateTime('d M Y'),
            ])
            ->paginated([4])
            ->defaultPaginationPageOption(4);
    }
}
