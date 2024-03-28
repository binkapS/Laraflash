<?php

namespace Binkap\Laraflash;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Binkap\Laraflash\Flash message(string $message)
 * @method void  livewire(Component $component)
 * @method static Binkap\Laraflash\Flash success()
 * @method static Binkap\Laraflash\Flash warning()
 * @method static Binkap\Laraflash\Flash danger()
 *
 */
class Laraflash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraflash';
    }
}
