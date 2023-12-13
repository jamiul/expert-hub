<?php

namespace App\Filament\Resources;

use App\Enums\Scholarship\FundType;
use App\Enums\Scholarship\StudentType;
use App\Enums\Scholarship\StudyLevel;
use App\Filament\Resources\ScholarshipResource\Pages;
use App\Filament\Resources\ScholarshipResource\RelationManagers;
use App\Filament\Resources\ScholarshipResource\RelationManagers\AreasRelationManager;
use App\Models\Scholarship;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScholarshipResource extends Resource
{
    protected static ?string $model = Scholarship::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('university')
                    ->relationship('university', 'name'),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->required(),
                Select::make('student_type')
                    ->options(StudentType::class),
                Forms\Components\TextInput::make('supervisor_link'),
                Forms\Components\TextInput::make('application_process_link'),
                Forms\Components\Toggle::make('automatic_consideration')
                    ->required(),
                Forms\Components\DatePicker::make('deadline'),
                Forms\Components\TextInput::make('currency'),
                Forms\Components\TextInput::make('value')
                    ->numeric(),
                Select::make('areas')
                    ->multiple()
                    ->relationship('areas', 'name'),
                Grid::make(2)
                    ->schema([
                Repeater::make('eligibilities')
                ->relationship()
                ->schema([
                    Select::make('study_level')
                        ->options(StudyLevel::class)
                ]),
                Repeater::make('funds')
                ->relationship()
                ->schema([
                    Select::make('fund_type')
                        ->options(FundType::class)
                ]),
                    ]),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('university.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('student_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deadline')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('value')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean()
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
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScholarships::route('/'),
            'create' => Pages\CreateScholarship::route('/create'),
            'edit' => Pages\EditScholarship::route('/{record}/edit'),
        ];
    }
}
