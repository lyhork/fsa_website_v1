<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrakasResource\Pages;
use App\Filament\Resources\PrakasResource\RelationManagers;
use App\Models\Prakas;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;

class PrakasResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Documents';

    protected static ?string $model = Prakas::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
                ->schema([
                    Section::make([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->placeholder("Title"),
                        TextInput::make('author')->placeholder("Author"),
                        Forms\Components\DateTimePicker::make('published_at'),
                        Forms\Components\Toggle::make('status'),
                    ])->columns(2)
                ]),
            Group::make()
                ->schema([
                    Section::make([
                        FileUpload::make('prakas_images')
                            ->minSize(50) // 50 kb
                            ->maxSize(2048) // 2 MB
                            ->imageResizeMode('cover')
                            ->imageResizeTargetWidth('1080')
                            ->imageResizeTargetHeight('1920')
                            ->acceptedFileTypes(['image/*'])
                            ->directory('prakas')
                            ->required()
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->openable()
                            ->storeFileNamesIn('original_filename'),
                        FileUpload::make('prakas_file')
                            ->minSize(50) // 50 kb
                            ->maxSize(307200) // 20MB
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('prakas')
                            ->required()
                            ->openable()
                            ->storeFileNamesIn('original_filename'),
                    ])
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('author')
                ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
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
                    ->after(function (Prakas $record) {
                        // Delete single image
                        if ($record->prakas_file) {
                            Storage::disk('public')->delete($record->prakas_file);
                        }

                        // Delete multiple images (if applicable)
                        if ($record->prakas_images) {
                            foreach ($record->prakas_images as $prakas_image) {
                                Storage::disk('public')->delete($prakas_image);
                            }
                        }
                    }),
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'km'];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrakas::route('/'),
            'create' => Pages\CreatePrakas::route('/create'),
            'edit' => Pages\EditPrakas::route('/{record}/edit'),
        ];
    }
}
