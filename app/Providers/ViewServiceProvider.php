<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using class based composers...
        View::composer('GestioneSoci', 'App\Http\ViewComposers\SociComposer');
        View::composer('GestioneCollaboratori', 'App\Http\ViewComposers\CollabComposer');
        View::composer('GestioneStagisti', 'App\Http\ViewComposers\StagComposer');
    }
}
