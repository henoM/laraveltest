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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //UserRepo
        $this->app->bind(
            'App\Contracts\Admin\User\UserInterface',
            'App\Repositories\Admin\User\UserRepository'
        );
    }
}
