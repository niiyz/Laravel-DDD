<?php

namespace Keihi\Providers;

use Illuminate\Support\ServiceProvider;
use Keihi\Services\KeihiServiceInterface;
use Keihi\Services\KeihiService;

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
        // 経費サービス
        $this->app->singleton(KeihiServiceInterface::class, KeihiService::class);
    }
}
