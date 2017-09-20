<?php

namespace Furbook\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\Facades\View;
use Furbook\Breed;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ViewFactory $view)
    {
        \Schema::defaultStringLength(191);
        // cach thu 2 de share bien trong view
        // $breeds = Breed::all()->pluck('name', 'id');
        // View::share('breeds', $breeds);
        $view->composer('*', 'Furbook\Http\Views\Composers\CatFormComposer');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
