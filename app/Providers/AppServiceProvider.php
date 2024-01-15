<?php

namespace App\Providers;

use App\Http\ViewComposers\MaterialComposer;
use App\Http\ViewComposers\TypeComposer;
use Illuminate\Support\Facades\Blade;
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
        view()->composer('front/index', MaterialComposer::class);
        view()->composer('front/product', MaterialComposer::class);
        view()->composer('front/products', TypeComposer::class);
        view()->composer('back/catalogs/template', MaterialComposer::class);
        view()->composer('back/catalogs/template', TypeComposer::class);

        Blade::if('admin', function () {
            return auth()->user()->role === 'admin';
        });
    }
}
