<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Http\ViewComposers\TypeComposer;
use App\Http\ViewComposers\CategoryComposer;

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
        view()->composer('front/layout', CategoryComposer::class);
        view()->composer('back/catalogs/template', CategoryComposer::class);
        view()->composer('back/models/template', TypeComposer::class);

        Blade::if('admin', function () {
            return auth()->user()->role === 'admin';
        });
    }
}
