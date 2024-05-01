<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;

use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use App\Filament\Resources\PostResource\Pages;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\Group::make()->schema([
                Section::make()
                    ->schema([
                // Forms\Components\Select::make('user_id')->columnSpanFull()
                //     ->relationship('user','name'),
          
                // Forms\Components\CheckboxList::make('tags')
                //      ->relationship('tags', 'name')
                //     ->columns(2)
                    //     ->gridDirection('row'),
                      
            
                    Forms\Components\TextInput::make('title')
                        ->label('Blog Title')
                        ->placeholder('Enter Blog Title')
                        ->required()
                        ->maxLength(255)
                        ->reactive()
                        ->afterStateUpdated(function($set, $state){ 
                            $set('slug',Str::slug($state));
                        }),
                    Forms\Components\RichEditor::make('content')
                        ->fileAttachmentsDirectory('attachments')
                        ->fileAttachmentsVisibility('private')
                        ->required(),
                    ]),
         Forms\Components\Section::make('Image Upload')->schema([
                 
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->columnSpanFull(),
                           
                        Forms\Components\FileUpload::make('gallery')
                          ->image()
                          ->imageEditor()
                          ->multiple()
                          ->directory('post_gallery_images'),
        
                        // Section::make('Tags')->schema([
                        //         Select::make('tags')->relationship('tags','name')
                        //     ])->columnSpan(1),
                        ]), 
        ])->columnSpan(['lg' => 2]),
        Forms\Components\Group::make()->schema([
            Forms\Components\Section::make('Category')->schema([
                     
              Forms\Components\CheckboxList::make('categories')
              ->relationship('categories', 'name')
              ->columns(1)
              ->gridDirection('row'),
            ]),  
                
            Forms\Components\Section::make('Status')->schema([ 

                Forms\Components\DateTimePicker::make('published_at')
                  ->default(now())
                  ->native(true),
         

              Forms\Components\Toggle::make('is_active')
                  ->label('is_active')
                  ->onIcon('heroicon-m-eye')
                  ->offIcon('heroicon-m-eye-slash')
                  ->onColor('success')
                  ->offColor('danger')
                  ->inline(false),
       ]),
    ]),
       
            ])->Columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //Tables\Columns\TextColumn::make('user.name'),
               // Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image')->circular(),
                Tables\Columns\TextColumn::make('publish_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger'),
                
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
