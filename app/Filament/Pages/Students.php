<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Students extends Page
{
    protected static ?string $title = '';

    protected static ?string $navigationLabel = 'Students';

    protected string $view = 'filament.pages.students';
}
