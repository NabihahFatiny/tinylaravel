<?php

namespace App\Filament\Resources\Announcements\Schemas;

// These 'use' statements are like importing tools into your workshop
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class AnnouncementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
