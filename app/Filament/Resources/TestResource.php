<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestResource\Pages;
use App\Filament\Resources\TestResource\RelationManagers;
use App\Models\Test;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use SebastianBergmann\CodeUnitReverseLookup\Wizard;

class TestResource extends Resource
{
    protected static ?string $model = Test::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Wizard::make()
                ->schema([
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),
                    Forms\Components\Wizard\Step::make('Test Step Wizard'),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListTests::route('/'),
            'create' => Pages\CreateTest::route('/create'),
            'edit' => Pages\EditTest::route('/{record}/edit'),
        ];
    }
}
