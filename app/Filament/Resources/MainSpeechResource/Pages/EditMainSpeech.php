<?php

namespace App\Filament\Resources\MainSpeechResource\Pages;

use App\Filament\Resources\MainSpeechResource;
use App\Models\MainSpeech;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditMainSpeech extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = MainSpeechResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make()
                ->after(function (MainSpeech $record) {
                    // Delete single image
                    if ($record->speech_image) {
                        Storage::disk('public')->delete($record->speech_image);
                    }
                }),
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
            ->title('Main_Speech updated')
            ->body('Main_Speech has been updated successfully.');
    }
}
