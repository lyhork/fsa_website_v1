<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditStaff extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = StaffResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Staff updated')
            ->body('Staff has been updated successfully.');
    }
}
