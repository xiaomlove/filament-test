<?php

namespace App\MyCustomFilament\Resources;

use App\Models\Migration;
use App\MyCustomFilament\Resources\MigrationResource\Pages;
use App\MyCustomFilament\Resources\MigrationResource\RelationManagers;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MigrationResource extends Resource
{
    protected static ?string $model = Migration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListMigrations::route('/'),
            'create' => Pages\CreateMigration::route('/create'),
            'edit' => Pages\EditMigration::route('/{record}/edit'),
        ];
    }
}
