<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\Column;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Forms\Components\Group;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                Forms\Components\Select::make('user_id')->columnSpanFull()
                    ->relationship('user','name'),
                // Forms\Components\CheckboxList::make('categories')
                //     ->relationship('categories', 'name')
                //     ->columns(2)
                //     ->gridDirection('row'),
                // Forms\Components\CheckboxList::make('tags')
                //      ->relationship('tags', 'name')
                //     ->columns(2)
                //     ->gridDirection('row'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function($set, $state){ 
                        $set('slug',Str::slug($state));
                    }),
              Forms\Components\RichEditor::make('content')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('private')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('published')
                    ->required()->columnSpanFull(),
                    ])->columnSpan(1)->Columns(2),
               
                Group::make()->schema([
                    Section::make()->schema([
                       Forms\Components\DateTimePicker::make('publish_at')->columnSpanFull(),
                    ]),
                    Section::make()->schema([
                    Forms\Components\FileUpload::make('featured_image')
                        ->image()->columnSpanFull(),
                       ])->columnSpan(1),
                    Forms\Components\FileUpload::make('gallery')
                      ->multiple()
                      ->directory('post_gallery_images'),
    
                    // Section::make('Tags')->schema([
                    //         Select::make('tags')->relationship('tags','name')
                    //     ])->columnSpan(1),
                    ]),
                
              
            ])->Columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
               // Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image')->circular(),
                Tables\Columns\TextColumn::make('publish_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('published')
                    ->boolean(),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

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
