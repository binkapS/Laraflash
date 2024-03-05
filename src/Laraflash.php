<?php

namespace Binkap\Laraflash;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Binkap\Laraflash\LaraflashFacade message(string $message)
 * @method void Binkap\Laraflash\LaraflashFacade livewire(Component $component)
 * @method static Binkap\Laraflash\LaraflashFacade success()
 * @method static Binkap\Laraflash\LaraflashFacade warning()
 * @method static Binkap\Laraflash\LaraflashFacade danger()
 *
 * @see Binkap\Laraflash\LaraflashFacade
 */
class Laraflash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraflash';
    }
}
