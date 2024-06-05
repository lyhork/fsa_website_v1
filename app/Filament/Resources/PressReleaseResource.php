<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PressReleaseResource\Pages;
use App\Filament\Resources\PressReleaseResource\RelationManagers;
use App\Models\PressRelease;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class PressReleaseResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Documents';

    protected static ?string $model = PressRelease::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        RichEditor::make('content')
                            ->columnSpanFull(),
                        Forms\Components\DateTimePicker::make('published_at'),
                        Forms\Components\Toggle::make('status'),
                    ])->columns(2)
                ]),
            Group::make()
                ->schema([
                    Section::make([
                        FileUpload::make('press_image')
                            ->minSize(50) // 50 kb
                            ->maxSize(2048) // 2 MB
                            ->imageResizeMode('cover')
                            // ->imageResizeTargetWidth('1080')
                            // ->imageResizeTargetHeight('1920')
                            ->acceptedFileTypes(['image/*'])
                            ->directory('press-release')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->openable(),
                        FileUpload::make('press_images')
                            ->minSize(50) // 50 kb
                            ->maxSize(2048) // 2 MB
                            ->imageResizeMode('cover')
                            // ->imageResizeTargetWidth('1080')
                            // ->imageResizeTargetHeight('1920')
                            ->acceptedFileTypes(['image/*'])
                            ->directory('press-release')
                            ->required()
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->openable()
                            ->storeFileNamesIn('original_filename'),
                        FileUpload::make('press_file')
                            ->minSize(50) // 50 kb
                            ->maxSize(307200) // 20MB
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('press-release')
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
                Tables\Columns\ImageColumn::make('press_image'),
                Tables\Columns\TextColumn::make('title')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
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
                    ->after(function (PressRelease $record) {
                        // Delete single image
                        if ($record->press_file) {
                            Storage::disk('public')->delete($record->press_file);
                        }

                        // Delete multiple images (if applicable)
                        if ($record->press_images) {
                            foreach ($record->press_images as $pres_image) {
                                Storage::disk('public')->delete($pres_image);
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
            'index' => Pages\ListPressReleases::route('/'),
            'create' => Pages\CreatePressRelease::route('/create'),
            'view' => Pages\ViewPressRelease::route('/{record}'),
            'edit' => Pages\EditPressRelease::route('/{record}/edit'),
        ];
    }
}
