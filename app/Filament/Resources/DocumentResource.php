<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Helpers\EncodingHelper;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\Model;

class DocumentResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Documents';

    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

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
                            FileUpload::make('doc_images')
                                ->minSize(50) // 50 kb
                                ->maxSize(2048) // 2 MB
                                ->imageResizeMode('cover')
                                ->imageResizeTargetWidth('1080')
                                ->imageResizeTargetHeight('1920')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('docs')
                                ->required()
                                ->image()
                                ->multiple()
                                ->reorderable()
                                ->openable()
                                ->storeFileNamesIn('original_filename'),
                            FileUpload::make('doc_file')
                                ->minSize(50) // 50 kb
                                ->maxSize(307200) // 20MB
                                ->acceptedFileTypes(['application/pdf'])
                                ->directory('docs')
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
                    ->after(function (Document $record) {
                        // Delete single image
                        if ($record->doc_file) {
                            Storage::disk('public')->delete($record->doc_file);
                        }

                        // Delete multiple images (if applicable)
                        if ($record->doc_images) {
                            foreach ($record->doc_images as $doc_image) {
                                Storage::disk('public')->delete($doc_image);
                            }
                        }
                    }),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make()
                //         ->after(function (Document $record) {
                //             // Delete single image
                //             if ($record->doc_file) {
                //                 Storage::disk('public/doc')->delete($record->doc_file);
                //             }

                //             // Delete multiple images (if applicable)
                //             if ($record->doc_images) {
                //                 foreach ($record->doc_images as $doc_image) {
                //                     Storage::disk('public/doc')->delete($doc_image);
                //                 }
                //             }
                //         }),
                // ]),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
