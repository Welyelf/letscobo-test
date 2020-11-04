<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Example;
use App\Colabolator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('example', function(){
            return new Example(); // Example::class
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
