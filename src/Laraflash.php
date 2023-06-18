<?php

namespace Binkap\Laraflash;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Binkap\Laraflash\LaraflashFacade message(string $message)
 * @method static Binkap\Laraflash\LaraflashFacade header(string $header)
 * @method static Binkap\Laraflash\LaraflashFacade livewire(Component $component)
 * @method static Binkap\Laraflash\LaraflashFacade simple()
 * @method static Binkap\Laraflash\LaraflashFacade overlay()
 * @method static Binkap\Laraflash\LaraflashFacade info()
 * @method static Binkap\Laraflash\LaraflashFacade success()
 * @method static Binkap\Laraflash\LaraflashFacade warn()
 * @method static Binkap\Laraflash\LaraflashFacade error()
 *
 * @see Binkap\Laraflash\LaraflashFacade
 */
class Laraflash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LaraflashFacade::class;
    }
}
