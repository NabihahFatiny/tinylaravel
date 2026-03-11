<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Students extends Page
{
    protected static ?string $navigationLabel = 'Students';

    protected static ?string $title = 'Students';

    protected string $view = 'filament.pages.students';
}
