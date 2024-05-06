<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManagerProfileResource\Pages;
use App\Filament\Resources\ManagerProfileResource\RelationManagers;
use App\Models\ManagerProfile;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ManagerProfileResource extends Resource
{
    protected static ?string $navigationGroup = 'About FSA';

    protected static ?string $model = ManagerProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('manager_image')
                                ->imageResizeMode('cover')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('manager-profile/')
                                ->required()
                                ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('manager_image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (ManagerProfile $record) {
                        // Delete single image
                        if ($record->manager_image) {
                            Storage::disk('public')->delete($record->manager_image);
                        }
                    }),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManagerProfiles::route('/'),
            'create' => Pages\CreateManagerProfile::route('/create'),
            'view' => Pages\ViewManagerProfile::route('/{record}'),
            'edit' => Pages\EditManagerProfile::route('/{record}/edit'),
        ];
    }
}
