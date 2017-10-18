<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        //bind it to the service container
        \App::bind('App\Balance\Stripe', function(){
            $balance = new \App\Balance\Stripe;
            return $balance;
        });
    }
}
