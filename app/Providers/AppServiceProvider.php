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
            $collabolator = new Colabolator();
            $foo = config('services.foo');
            return new Example($collabolator,$foo);
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
