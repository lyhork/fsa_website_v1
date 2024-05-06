<?php

namespace App\Filament\Resources\ManagerProfileResource\Pages;

use App\Filament\Resources\ManagerProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditManagerProfile extends EditRecord
{
    protected static string $resource = ManagerProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
