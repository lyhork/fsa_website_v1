<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditFont extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = FontResource::class;

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
            ->title('File updated')
            ->body('FILE has been updated successfully.');
    }
}
