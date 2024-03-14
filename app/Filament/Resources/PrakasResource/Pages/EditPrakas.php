<?php

namespace App\Filament\Resources\PrakasResource\Pages;

use App\Filament\Resources\PrakasResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPrakas extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PrakasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Prakas updated')
            ->body('Prakas has been updated successfully.');
    }
}
