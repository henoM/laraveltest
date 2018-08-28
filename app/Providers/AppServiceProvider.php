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
        $this->app->bind(
            'App\Contracts\User\Home\HomeInterface',
            'App\Repositories\User\Home\HomeRepository'
        );

        $this->app->bind(
            'App\Contracts\User\Family\FamilyInterface',
            'App\Repositories\User\Family\FamilyRepository'
        );
    }
}
