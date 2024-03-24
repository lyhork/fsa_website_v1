<?php

namespace App\Filament\Resources\OtherResource\Pages;

use App\Filament\Resources\OtherResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditOther extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = OtherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
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
            ->title('Other updated')
            ->body('Other has been updated successfully.');
    }
}
