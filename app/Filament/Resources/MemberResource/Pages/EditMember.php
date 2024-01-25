<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use App\Models\Member;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function (Member $record) {
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

}
