<?php
namespace App\MyCustomFilament;

use App\MyCustomFilament\Resources\MigrationResource;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Illuminate\Support\Facades\Log;

class MyCustomFilament implements Plugin
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(Panel $panel): void
    {
        Log::info(__METHOD__);
        $panel->resources([
            MigrationResource::class
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Panel $panel): void
    {
        Log::info(__METHOD__);
    }

    public function getId(): string
    {
        return "MyCustomFilament";
    }
}
