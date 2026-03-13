<?php

namespace App\Filament\Resources\Teachers\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class TeachersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('department'),

                TextColumn::make('phone_number'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Temporarily removed to fix "Class not found" error
            ])
            ->bulkActions([
                // Temporarily removed to fix "Class not found" error
            ]);
    }
}
