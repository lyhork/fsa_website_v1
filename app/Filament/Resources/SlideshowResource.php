<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideshowResource\Pages;
use App\Filament\Resources\SlideshowResource\RelationManagers;
use App\Models\Slideshow;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class SlideshowResource extends Resource
{
    protected static ?string $model = Slideshow::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('slideshow')
                                ->minSize(50) // 50 kb
                                ->maxSize(2048) // 2 MB
                                ->acceptedFileTypes(['image/*'])
                                ->required()
                                ->image()
                                ->columnSpanFull(),
                Forms\Components\Toggle::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('slideshow'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->after(function (Slideshow $record) {
                        // Delete single image
                        if ($record->slideshow) {
                            Storage::disk('public')->delete($record->slideshow);
                        }
                    }),
                ]),
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
            'index' => Pages\ListSlideshows::route('/'),
            'create' => Pages\CreateSlideshow::route('/create'),
            'edit' => Pages\EditSlideshow::route('/{record}/edit'),
        ];
    }
}
