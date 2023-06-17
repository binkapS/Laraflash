<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Livewire\Container;
use Binkap\Laraflash\Livewire\Overlay;
use Binkap\Laraflash\Livewire\Simple;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaraflashServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . \DIRECTORY_SEPARATOR . 'config/laraflash.php', 'laraflash');
    }

    public function boot()
    {
        $this->publishes([
            // __DIR__ . \DIRECTORY_SEPARATOR . 'config' => \config_path(),
            __DIR__ . \DIRECTORY_SEPARATOR . 'assets' => \public_path('vendor/laraflash'),
            //__DIR__ . \DIRECTORY_SEPARATOR . 'views' . \DIRECTORY_SEPARATOR . 'livewire' => $this->app->resourcePath('views/vendor/laraflash'),
        ], 'laraflash');
        $this->loadViewsFrom(__DIR__ . \DIRECTORY_SEPARATOR . 'views', 'laraflash');
        Livewire::component('laraflash.container', Container::class);
        Livewire::component('laraflash.simple', Simple::class);
        Livewire::component('laraflash.overlay', Overlay::class);
        Blade::directive('laraflashStyles', fn () => '<link rel="stylesheet" href="{{ asset("vendor/laraflash/css/build.css", app()->isProduction()) }}">');
    }
}
