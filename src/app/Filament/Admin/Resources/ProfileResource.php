<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Filament\Admin\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('photo')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('university')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('major')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('gpa')
                    ->numeric()
                    ->default(null),
                Forms\Components\Textarea::make('short_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('about')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('linkedin')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('github')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('university')
                    ->searchable(),
                Tables\Columns\TextColumn::make('major')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gpa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('linkedin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('github')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
