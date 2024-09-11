<?php

namespace App\Filament\App\Resources\DepartmentOfficeResource\Pages;

use App\Filament\App\Resources\DepartmentOfficeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDepartmentOffice extends ViewRecord
{
    protected static string $resource = DepartmentOfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
