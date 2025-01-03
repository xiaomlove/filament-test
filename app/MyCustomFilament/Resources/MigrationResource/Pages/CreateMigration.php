<?php

namespace App\MyCustomFilament\Resources\MigrationResource\Pages;

use App\MyCustomFilament\Resources\MigrationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMigration extends CreateRecord
{
    protected static string $resource = MigrationResource::class;
}
