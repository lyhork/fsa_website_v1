<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainSpeechResource\Pages;
use App\Filament\Resources\MainSpeechResource\RelationManagers;
use App\Models\MainSpeech;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Support\Facades\Storage;

class MainSpeechResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Home';

    protected static ?string $model = MainSpeech::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
                ->schema([
                    Section::make([
                        Forms\Components\TextInput::make('content')
                        ->required()
                        ->placeholder("Content")
                        ->columnSpanFull(),
                        Forms\Components\Toggle::make('status'),
                    ])->columns(2)
                ]),
            Group::make()
                ->schema([
                    Section::make([
                        FileUpload::make('speech_image')
                            ->minSize(50) // 50 kb
                            ->maxSize(2048) // 2 MB
                            ->imageResizeMode('cover')
                            // ->imageResizeTargetWidth('1920')
                            // ->imageResizeTargetHeight('1080')
                            ->acceptedFileTypes(['image/*'])
                            ->directory('main-speech')
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
                Tables\Columns\ImageColumn::make('speech_image'),
                Tables\Columns\TextColumn::make('content')
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
                    ->after(function (MainSpeech $record) {
                        // Delete single image
                        if ($record->speech_image) {
                            Storage::disk('public')->delete($record->speech_image);
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
            'index' => Pages\ListMainSpeeches::route('/'),
            'create' => Pages\CreateMainSpeech::route('/create'),
            'view' => Pages\ViewMainSpeech::route('/{record}'),
            'edit' => Pages\EditMainSpeech::route('/{record}/edit'),
        ];
    }
}
