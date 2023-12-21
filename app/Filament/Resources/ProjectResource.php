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
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
  
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user','name'),
                    Group::make()->schema([
                        Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->reactive()
                        ->afterStateUpdated(function($set, $state){ 
                            $set('slug',Str::slug($state));
                        }),
                   Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255), 
                    ])->columnSpan(1)->Columns(2),
              
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                 Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'Ongoing' => 'Ongoing',
                        'Complete' => 'Complete',
                        'Pending' => 'Pending',
                    ]),
                ])->columnSpan(1),
            Group::make()->schema([  
                Section::make()->schema([
                    Forms\Components\FileUpload::make('featured_image')
                      ->multiple()
                      ->directory('project_images'),
               ]),
               
               Section::make()->schema([
                Forms\Components\DateTimePicker::make('start_date')
                   ->required(),
                Forms\Components\DateTimePicker::make('end_date')
                   ->required(),
           ]),

           Section::make()->schema([
                Forms\Components\TextInput::make('project_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('expected_amount')
                     ->numeric(),
             ]),
           ])->columnSpan(1),
            ])->Columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
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
            //
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
