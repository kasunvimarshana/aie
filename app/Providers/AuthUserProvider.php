<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthUserProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function($view){
            $authUser = auth()->user();
            $view->with('authUser', $authUser);
        });
    }
}
