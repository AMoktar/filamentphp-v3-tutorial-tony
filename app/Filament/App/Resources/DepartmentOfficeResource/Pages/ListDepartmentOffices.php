<?php

namespace App\Filament\App\Resources\DepartmentOfficeResource\Pages;

use App\Filament\App\Resources\DepartmentOfficeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDepartmentOffices extends ListRecords
{
    protected static string $resource = DepartmentOfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
