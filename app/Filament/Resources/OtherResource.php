<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherResource\Pages;
use App\Filament\Resources\OtherResource\RelationManagers;
use App\Models\Other;
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
use Filament\Resources\Concerns\Translatable;
use Illuminate\Support\Facades\Storage;

class OtherResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Documents';

    protected static ?string $model = Other::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        FileUpload::make('other_image')
                            ->minSize(50) // 50 kb
                            ->maxSize(2048) // 2 MB
                            ->imageResizeMode('cover')
                            // ->imageResizeTargetWidth('1080')
                            // ->imageResizeTargetHeight('1920')
                            ->acceptedFileTypes(['image/*'])
                            ->directory('others')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->openable(),
                        FileUpload::make('other_file')
                            ->minSize(50) // 50 kb
                            ->maxSize(307200) // 20MB
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('others')
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
                Tables\Columns\ImageColumn::make('other_image'),
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
                    ->after(function (Other $record) {
                        // Delete single image
                        if ($record->other_file) {
                            Storage::disk('public')->delete($record->other_file);
                        }

                        // Delete single image
                        if ($record->other_image) {
                            Storage::disk('public')->delete($record->other_image);
                        }
                        // Delete multiple images (if applicable)
                        // if ($record->other_images) {
                        //     foreach ($record->other_images as $other_image) {
                        //         Storage::disk('public')->delete($other_image);
                        //     }
                        // }
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
            'index' => Pages\ListOthers::route('/'),
            'create' => Pages\CreateOther::route('/create'),
            'view' => Pages\ViewOther::route('/{record}'),
            'edit' => Pages\EditOther::route('/{record}/edit'),
        ];
    }
}
