<?php

namespace App\Filament\App\Resources\DepartmentOfficeResource\Pages;

use App\Filament\App\Resources\DepartmentOfficeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepartmentOffice extends EditRecord
{
    protected static string $resource = DepartmentOfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
