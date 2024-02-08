<?php

namespace App\Filament\App\Pages\Tenancy;

use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Database\Eloquent\Model;

class EditTeamProfile extends EditTenantProfile
{
      public static function getLabel(): string
      {
            return 'Team profile';
      }

      public function form(Form $form): Form
      {
            // dump(self::getUrl());
            return $form
                  ->schema([
                        TextInput::make('name'),
                        TextInput::make('slug'),
                  ]);
      }

      protected function getRedirectUrl(): ?string
      {
            return self::getUrl(tenant: $this->tenant->refresh());
      }

      public static function getRouteName(?string $panel = null): string
      {
            $panel = $panel ? Filament::getPanel($panel) : Filament::getCurrentPanel();

            $routeName = 'tenant.' . static::getRelativeRouteName();
            $routeName = static::prependClusterRouteBaseName($routeName);

            return $panel->generateRouteName($routeName);
      }
}
