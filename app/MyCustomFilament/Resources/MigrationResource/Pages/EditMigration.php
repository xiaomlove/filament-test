<?php

namespace App\MyCustomFilament\Resources\MigrationResource\Pages;

use App\MyCustomFilament\Resources\MigrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMigration extends EditRecord
{
    protected static string $resource = MigrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
