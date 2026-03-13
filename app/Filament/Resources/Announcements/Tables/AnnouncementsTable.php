<?php

namespace App\Filament\Resources\Announcements\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;


class AnnouncementsTable
{

    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                // Add this line below:
                TextColumn::make('message')
                    ->limit(50) // This cuts the text off after 50 characters so it's not too long
                    ->html(),   // Use this if your message has bold/italic text from the RichEditor

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Published On'),
            ]);
    }
}
