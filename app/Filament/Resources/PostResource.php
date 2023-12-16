<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('featured_image')
                    ->image(),
                Forms\Components\DateTimePicker::make('publish_at'),
                Forms\Components\Toggle::make('published')
                    ->required(),
                Forms\Components\Textarea::make('meta_description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('views')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('likes')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('shares')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('external_url')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('publish_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('published')
                    ->boolean(),
                Tables\Columns\TextColumn::make('views')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('likes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shares')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('external_url')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
