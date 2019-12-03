<?php

namespace App\Providers;

use App\Http\Responsitories\ProductResponsitoryInterface;
use App\Http\Services\Imp\ProductServiceImp;
use App\Http\Services\ProductServiceInterface;
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
        $this->app->singleton(ProductResponsitoryInterface::class, ProductResponsitoryInterface::class);
        $this->app->singleton(ProductServiceInterface::class, ProductServiceImp::class);
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
