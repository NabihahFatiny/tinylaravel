<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use BackedEnum; // Add this line at the top

class Students extends Page
{
    // Update this line to include the full type list
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Students';

    protected static ?string $title = 'Students';

    protected string $view = 'filament.pages.students';
}
