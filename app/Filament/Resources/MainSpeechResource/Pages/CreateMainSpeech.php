<?php

namespace App\Filament\Resources\MainSpeechResource\Pages;

use App\Filament\Resources\MainSpeechResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateMainSpeech extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = MainSpeechResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Main_Speech created')
            ->body('Main_Speech has been created successfully.');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
