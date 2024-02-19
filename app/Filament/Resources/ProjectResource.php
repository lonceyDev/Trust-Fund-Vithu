<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource\RelationManagers\CategoriesRelationManager;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?int $navigationSort = 2;


    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
  
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Group::make()->schema([
                Section::make()->schema([
                    Forms\Components\Select::make('user_id')
                        ->relationship('user','name'),
                        Forms\Components\Select::make('status')
                        ->required()
                        ->options([
                            'Ongoing' => 'Ongoing',
                            'Completed' => 'Completed',
                            'Pending' => 'Pending',
                    ]),
                 ])->columnSpan(1)->Columns(2),
                //  Group::make()->schema([
                //     Section::make()->schema([
                //     Forms\Components\Select::make('categories')
                //         ->relationship('categories', 'name')
                //         ->multiple()
                //         ->preload(),
                        
                //     Forms\Components\Select::make('tags')
                //          ->relationship('tags', 'name')
                //          ->multiple()
                //          ->preload(),

                //     ]),
                // ]),
                Group::make()->schema([
                        Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->reactive()
                        ->afterStateUpdated(function($set, $state){ 
                            $set('slug',Str::slug($state));
                        }),
                    ]),
              
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('private')
                ]),

            Group::make()->schema([  
                Section::make()->schema([
                    Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->imageEditor()
                    ->directory('project_images'),
               ]),
               Section::make()->schema([
                Forms\Components\FileUpload::make('gallery')
                  ->multiple()
                  ->image()
                  ->imageEditor()
                  ->directory('gallery_images'),
           ]),
               
               Section::make()->schema([
                Forms\Components\DateTimePicker::make('start_date')
                   ->required(),
                Forms\Components\DateTimePicker::make('end_date')
                   ->required(),
           ])->columnSpan(1)->Columns(2),

           Section::make()->schema([
                Forms\Components\TextInput::make('project_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('expected_amount')
                     ->numeric(),
             ])->columnSpan(1)->Columns(2),
           ])->columnSpan(1),
            ])->Columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
            //    Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('project_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expected_amount')
                    ->numeric()
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
           // CategoriesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
