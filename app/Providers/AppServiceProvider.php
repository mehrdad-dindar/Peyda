<?php

namespace App\Providers;


use App\Models\FlashMessage;
use App\Models\Mobile_warranty;
use App\Observers\AdminWarrantyObserver;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        Mobile_warranty::observe(AdminWarrantyObserver::class);
    }
}
