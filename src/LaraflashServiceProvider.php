<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Livewire\Container;
use Binkap\Laraflash\Livewire\Overlay;
use Binkap\Laraflash\Livewire\Simple;
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
            __DIR__ . \DIRECTORY_SEPARATOR . 'config' => \config_path(),
            __DIR__ . \DIRECTORY_SEPARATOR . 'assets' => \public_path('laraflash'),
        ]);
        $this->loadViewsFrom(__DIR__ . \DIRECTORY_SEPARATOR . 'views', 'laraflash');
        Livewire::component('laraflash.container', Container::class);
        Livewire::component('laraflash.simple', Simple::class);
        Livewire::component('laraflash.overlay', Overlay::class);
    }
}
