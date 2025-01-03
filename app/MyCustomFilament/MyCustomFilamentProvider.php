<?php
namespace App\MyCustomFilament;

use Filament\Facades\Filament;
use Filament\Panel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class MyCustomFilamentProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Log::info("MyCustomFilamentProvider register");
        //register plugin here failed, cause route not found issue
//        Filament::serving(function () {
//            $adminPanel = Filament::getCurrentPanel();
//            $adminPanel->plugin(new MyCustomFilament());
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info("MyCustomFilamentProvider boot");
    }
}
