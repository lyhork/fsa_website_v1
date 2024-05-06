<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstitutionalStructureResource\Pages;
use App\Filament\Resources\InstitutionalStructureResource\RelationManagers;
use App\Models\InstitutionalStructure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class InstitutionalStructureResource extends Resource
{
    protected static ?string $navigationGroup = 'About FSA';

    protected static ?string $model = InstitutionalStructure::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('structure_image')
                                ->imageResizeMode('cover')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('institutional-structure/')
                                ->required()
                                ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('structure_image'),
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
                    ->after(function (InstitutionalStructure $record) {
                        // Delete single image
                        if ($record->structure_image) {
                            Storage::disk('public')->delete($record->structure_image);
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
            'index' => Pages\ListInstitutionalStructures::route('/'),
            'create' => Pages\CreateInstitutionalStructure::route('/create'),
            'view' => Pages\ViewInstitutionalStructure::route('/{record}'),
            'edit' => Pages\EditInstitutionalStructure::route('/{record}/edit'),
        ];
    }
}
