<?php

namespace App\Filament\Resources\SlideshowResource\Pages;

use App\Filament\Resources\SlideshowResource;
use App\Models\Slideshow;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditSlideshow extends EditRecord
{
    protected static string $resource = SlideshowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make()
                ->after(function (Slideshow $record) {
                    // Delete single image
                    if ($record->slideshow) {
                        Storage::disk('public')->delete($record->slideshow);
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
            ->title('Slideshow updated')
            ->body('Slideshow has been updated successfully.');
    }
}
