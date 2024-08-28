<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateStaff extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = StaffResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Staff created')
            ->body('Staff has been created successfully.');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
