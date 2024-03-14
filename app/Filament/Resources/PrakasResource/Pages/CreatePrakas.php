<?php

namespace App\Filament\Resources\PrakasResource\Pages;

use App\Filament\Resources\PrakasResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePrakas extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PrakasResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Prakas created')
            ->body('Prakas has been created successfully.');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
