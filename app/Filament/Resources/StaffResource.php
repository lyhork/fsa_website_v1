<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Models\Staff;
use Filament\Tables\Actions\Action;
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

class StaffResource extends Resource
{
    use Translatable;

    protected static ?string $model = Staff::class;

    protected static ?string $navigationGroup = 'Staff';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->placeholder("Name"),
                    Forms\Components\TextInput::make('position')
                        ->required()
                        ->placeholder("position"),
                    Forms\Components\TextInput::make('department')
                        ->required()
                        ->placeholder("department"),
                    Forms\Components\Toggle::make('status'),
                ])->columns(2)
            ]),
        Group::make()
            ->schema([
                Section::make([
                    FileUpload::make('image')
                        ->minSize(50) // 50 kb
                        ->maxSize(5120) // 5 MB
                        ->imageResizeMode('cover')
                        // ->imageResizeTargetWidth('1080')
                        // ->imageResizeTargetHeight('1920')
                        ->acceptedFileTypes(['image/*'])
                        ->directory('staff')
                        ->required()
                        ->image()
                        ->imageEditor()
                        ->openable(),
                ])
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department')
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
                    ->after(function (Staff $record) {
                        // Delete single image
                        if ($record->image) {
                            Storage::disk('public')->delete($record->image);
                        }
                    }),
                    Action::make('View Qr Code')
                    ->icon('heroicon-o-qr-code')
                    ->url(fn(Staff $record): string => static::getUrl('qr-code', ['record' => $record])),

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

    public static function getTranslatableLocales(): array
    {
        return ['en', 'km'];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
            'qr-code' => Pages\ViewQrCodeStaff::route('/{record}/qr-code'),
        ];
    }
}
