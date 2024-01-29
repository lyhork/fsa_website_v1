<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Models\Blog;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditBlog extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make()
                ->after(function (Blog $record) {
                    // Delete single image
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }

                    // Delete multiple images (if applicable)
                    if ($record->images) {
                        foreach ($record->images as $image) {
                            Storage::disk('public')->delete($image);
                        }
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
            ->title('Blog updated')
            ->body('Blog has been updated successfully.');
    }

}
