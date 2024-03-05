<?php

namespace Binkap\Laraflash;

use Illuminate\Support\ServiceProvider;

class LaraflashServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('laraflash', fn () => new Flash());
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . \DIRECTORY_SEPARATOR . 'views', 'laraflash');
    }
}
