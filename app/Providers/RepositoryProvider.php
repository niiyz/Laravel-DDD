<?php

namespace Keihi\Providers;

use Illuminate\Support\ServiceProvider;
use Keihi\Repositories\KeihiRepository;
use Keihi\Repositories\KeihiInterface;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 経費インターフェスと経費リポジトリの連結
        $this->app->bind(KeihiInterface::class, KeihiRepository::class);
    }
}
