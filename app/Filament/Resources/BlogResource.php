<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Support\Facades\Storage;

class BlogResource extends Resource
{
    use Translatable;

    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $navigationLabel = 'Blog';

    public static function getNavigationLabel(): string
    {
        return __('Blog');
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
                            RichEditor::make('content')
                                ->columnSpanFull(),
                            Forms\Components\DateTimePicker::make('published_at'),
                            Forms\Components\Toggle::make('status'),
                        ])->columns(2)
                    ]),
                Group::make()
                    ->schema([
                        Section::make([
                            FileUpload::make('image')
                                ->minSize(50) // 50 kb
                                ->maxSize(2048) // 2 MB
                                ->imageResizeMode('cover')
                                ->imageCropAspectRatio('16:9')
                                ->imageResizeTargetWidth('1920')
                                ->imageResizeTargetHeight('1080')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('posts/')
                                ->required()
                                ->image(),
                            FileUpload::make('images')
                                ->minSize(50) // 50 kb
                                ->maxSize(2048) // 2 MB
                                ->imageResizeMode('cover')
                                ->imageCropAspectRatio('16:9')
                                ->imageResizeTargetWidth('1920')
                                ->imageResizeTargetHeight('1080')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('posts/')
                                ->required()
                                ->image()
                                ->multiple()
                                ->reorderable()
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
                Tables\Columns\ImageColumn::make('image'),
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function (Blog $record) {
                            // Delete single image
                            if ($record->image) {
                                Storage::disk('public/posts')->delete($record->image);
                            }

                            // Delete multiple images (if applicable)
                            if ($record->images) {
                                foreach ($record->images as $image) {
                                    Storage::disk('public/posts')->delete($image);
                                }
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

    public static function getTranslatableLocales(): array
    {
        return ['en', 'km'];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
