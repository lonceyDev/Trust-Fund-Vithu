<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Group;

use Illuminate\Support\Facades\Auth;
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
  
    public static function form(Form $form): Form
    {
       
        $user = Auth::user();

        $user_id = $user->id;
     
                
        return $form
            ->schema([
                
             //   Section::make()->schema([
                  
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
                Forms\Components\Group::make()->schema([
                Section::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->reactive()
                        ->afterStateUpdated(function($set, $state){ 
                            $set('slug',Str::slug($state));
                        }),
                
              
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('private')
                ]),
                Forms\Components\Section::make('Image Upload')->schema([
                    Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->imageEditor()
                    ->directory('project_images'),
            
                Forms\Components\FileUpload::make('gallery')
                  ->multiple()
                  ->image()
                  ->imageEditor()
                  ->directory('gallery_images'),
               ]),
                ])->columnSpan(['lg' => 2]),  

             Forms\Components\Group::make()->schema([
                Forms\Components\Section::make('Category')->schema([
                    Forms\Components\CheckboxList::make('categories')
                    ->relationship('categories', 'name')
                    ->columns(1)
                    ->gridDirection('row'),
                      
                ]), 
              Section::make('Project')->schema([
                Forms\Components\DateTimePicker::make('start_date')
                   ->required(),
                Forms\Components\DateTimePicker::make('end_date')
                   ->required(),
              
                   Forms\Components\TextInput::make('project_amount')
                   ->required()
                   ->numeric(),
               Forms\Components\TextInput::make('expected_amount')
                    ->numeric(), 

              ]),
                Forms\Components\Section::make('Status')->schema([ 
                Section::make()->schema([
                    Forms\Components\Select::make('status')
                    ->required()
                    ->selectablePlaceholder(false)
                    ->default('Ongoing')
                    ->options([
                        'Ongoing' => 'Ongoing',
                        'Completed' => 'Completed',
                    ]),
                    Forms\Components\Toggle::make('is_active')
                    ->label('is_active')
                    ->onIcon('heroicon-m-eye')
                    ->offIcon('heroicon-m-eye-slash')
                    ->onColor('success')
                    ->offColor('danger')
                    ->inline(false),
                ]), 
            ]),
        ]),

         
            ])->Columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              //  Tables\Columns\TextColumn::make('user.name'),
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
