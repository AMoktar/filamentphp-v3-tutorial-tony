<?php

namespace App\Filament\App\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Dashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class AnalyticsDashboard extends Dashboard
{
    use HasFiltersForm;

    protected static ?string $slug = 'analytics';

    protected static string $routePath = 'analytics';

    protected static ?int $navigationSort = -1;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $title = 'Analytics';

    public function filtersForm(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\DatePicker::make('startOfYear')
                        // ->native(false)
                        ->default(now()->firstOfYear()),
                    Forms\Components\DatePicker::make('endOfYear')
                        // ->native(false)
                        ->default(now()->lastOfYear()),
                ])->columns(2)
        ]);
    }
}
