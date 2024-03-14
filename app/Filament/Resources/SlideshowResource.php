<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideshowResource\Pages;
use App\Filament\Resources\SlideshowResource\RelationManagers;
use App\Models\Slideshow;
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

class SlideshowResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Slideshows';

    protected static ?string $model = Slideshow::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make([
                            Forms\Components\TextInput::make('author')
                                ->required()
                                ->placeholder("Author")
                                ->columnSpanFull(),
                            Forms\Components\RichEditor::make('quote')
                            ->required()
                            ->placeholder("Quote")
                            ->columnSpanFull(),
                            Forms\Components\Toggle::make('status'),
                        ])->columns(2)
                    ]),
                Group::make()
                    ->schema([
                        Section::make([
                            FileUpload::make('slideshow_image')
                                ->minSize(50) // 50 kb
                                ->maxSize(2048) // 2 MB
                                ->imageResizeMode('cover')
                                ->imageResizeTargetWidth('1920')
                                ->imageResizeTargetHeight('1080')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('slideshows')
                                ->required()
                                ->image()
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
                Tables\Columns\ImageColumn::make('slideshow_image'),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quote')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (Slideshow $record) {
                        // Delete single image
                        if ($record->slideshow_image) {
                            Storage::disk('public')->delete($record->slideshow_image);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make()
                    // ->after(function (Slideshow $record) {
                    //     // Delete single image
                    //     if ($record->slideshow) {
                    //         Storage::disk('public')->delete($record->slideshow);
                    //     }
                    // }),
                ]),
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
            'index' => Pages\ListSlideshows::route('/'),
            'create' => Pages\CreateSlideshow::route('/create'),
            'edit' => Pages\EditSlideshow::route('/{record}/edit'),
        ];
    }
}
