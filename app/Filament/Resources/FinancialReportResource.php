<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinancialReportResource\Pages;
use App\Filament\Resources\FinancialReportResource\RelationManagers;
use App\Models\FinancialReport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FinancialReportResource extends Resource
{
    protected static ?string $model = FinancialReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';
    protected static ?string $navigationGroup = 'Accountablity';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('project_id')
                    ->relationship('project','title'),
                Forms\Components\DatePicker::make('report_at')
                    ->required(),
                Forms\Components\TextInput::make('donations')
                    ->numeric(),
                Forms\Components\TextInput::make('grants')
                    ->numeric(),
                Forms\Components\TextInput::make('program_expenses')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('administrative_expenses')
                    ->numeric(),
                Forms\Components\TextInput::make('fundraising_expenses')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('report_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('donations')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('grants')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('program_expenses')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('administrative_expenses')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fundraising_expenses')
                    ->numeric()
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
            'index' => Pages\ListFinancialReports::route('/'),
            'create' => Pages\CreateFinancialReport::route('/create'),
            'view' => Pages\ViewFinancialReport::route('/{record}'),
            'edit' => Pages\EditFinancialReport::route('/{record}/edit'),
        ];
    }
}
