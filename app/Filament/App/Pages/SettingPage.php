<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class SettingPage extends Page
{
    // protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.setting-page';


    // protected static ?string $navigationGroup = 'Settings';
    public static function getNavigationGroup(): ?string
    {
        return __('text.settings');
    }
}
