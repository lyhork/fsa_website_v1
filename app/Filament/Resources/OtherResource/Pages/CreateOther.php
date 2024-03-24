<?php

namespace App\Filament\Resources\OtherResource\Pages;

use App\Filament\Resources\OtherResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateOther extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = OtherResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Other created')
            ->body('Other has been created successfully.');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
