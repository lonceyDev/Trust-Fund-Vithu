<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use App\Filament\Resources\EventResource\Pages;


class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?int $navigationSort = 3;


    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              
        //  Group::make()->schema([
        //     Forms\Components\Select::make('user_id')
        //         ->relationship('user','name'),
        //  ]),
        //         // Group::make()->schema([
                //     Section::make()->schema([
                //     Forms\Components\CheckboxList::make('categories')
                //         ->relationship('categories', 'name')
                //         ->columns(2)
                //         ->gridDirection('row'),
                //     Forms\Components\CheckboxList::make('tags')
                //          ->relationship('tags', 'name')
                //         ->columns(2)
                //         ->gridDirection('row'),
                //     ]),
                // ]),
                
          
                Group::make()->schema([
                    Section::make()->schema([
                    Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function($set, $state){ 
                        $set('slug',Str::slug($state));
                    }),
                    Forms\Components\MarkdownEditor::make('description')
                    ->required(),
                ]),
                    Forms\Components\Section::make('Image Upload')->schema([
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->imageEditor()
                            ->directory('event_images'),
                        Forms\Components\FileUpload::make('gallery')
                                ->image()
                                ->imageEditor()
                                ->multiple()
                                ->directory('event_gallery_images'),
                 ]),    
              
                ])->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()->schema([
        
                    Forms\Components\Section::make('Category')->schema([  
                        Forms\Components\TextInput::make('location')
                        ->required()
                        ->maxLength(255),  
                        Forms\Components\CheckboxList::make('categories')
                        ->relationship('categories', 'name')
                        ->columns(1)
                        ->gridDirection('row'),
                          
                    ]),
                 Forms\Components\Section::make('Status')->schema([ 
               
                    Forms\Components\Select::make('status')
                        ->selectablePlaceholder(false)
                        ->options([
                        'Upcoming' => 'Upcoming',
                        'Complete' => 'Complete',
                        ]),
                    Forms\Components\DatePicker::make('events_at')
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
    ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('user.name')
                //     ->numeric()
                //     ->sortable(),
                //Tables\Columns\TextColumn::make('category.name'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image')
                ->circular()
                ->stacked()
                ->limitedRemainingText(),
                Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->trueColor('success')
                ->falseColor('danger'),
                Tables\Columns\TextColumn::make('events_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
