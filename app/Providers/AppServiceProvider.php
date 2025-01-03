<?php

namespace App\Providers;

use App\Filament\Resources\UserResource;
use App\MyCustomFilament\MyCustomFilament;
use Filament\Facades\Filament;
use Filament\Panel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Log::info(__METHOD__);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info(__METHOD__);
    }
}
