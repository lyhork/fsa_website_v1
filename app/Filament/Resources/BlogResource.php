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

    protected static ?string $navigationGroup = 'Posts';

    protected static ?string $model = Blog::class;

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'content'];
    }

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';

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
                            Forms\Components\TextInput::make('url')
                                ->placeholder("Url link")
                                ->columnSpanFull(),
                            Forms\Components\DateTimePicker::make('published_at'),
                            Forms\Components\Toggle::make('status'),
                        ])->columns(2)
                    ]),
                Group::make()
                    ->schema([
                        Section::make([
                            FileUpload::make('image')
                                ->minSize(10) // 10 kb
                                ->maxSize(2048) // 2 MB
                                ->imageResizeMode('cover')
                                // ->imageCropAspectRatio('16:9')
                                // ->imageResizeTargetWidth('1920')
                                // ->imageResizeTargetHeight('1080')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('posts/')
                                ->image(),
                            FileUpload::make('images')
                                ->minSize(10) // 10 kb
                                ->maxSize(2048) // 2 MB
                                ->imageResizeMode('cover')
                                // ->imageCropAspectRatio('16:9')
                                // ->imageResizeTargetWidth('1920')
                                // ->imageResizeTargetHeight('1080')
                                ->acceptedFileTypes(['image/*'])
                                ->directory('posts/')
                                ->image()
                                ->multiple()
                                ->reorderable()
                                ->openable()
                                ->storeFileNamesIn('attachment_file_names'),
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
                Tables\Columns\TextColumn::make('url')
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
                    ->after(function (Blog $record) {
                        // Delete single image
                        if ($record->image) {
                            Storage::disk('public')->delete($record->image);
                        }

                        // Delete multiple images (if applicable)
                        if ($record->images) {
                            foreach ($record->images as $image) {
                                Storage::disk('public')->delete($image);
                            }
                        }
                    }),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make()
                //         ->after(function (Blog $record) {
                //             // Delete single image
                //             if ($record->image) {
                //                 Storage::disk('public/posts')->delete($record->image);
                //             }

                //             // Delete multiple images (if applicable)
                //             if ($record->images) {
                //                 foreach ($record->images as $image) {
                //                     Storage::disk('public/posts')->delete($image);
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
