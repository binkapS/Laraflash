<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Mode;
use Binkap\Laraflash\Flash;

/**
 * Create a flash message
 *
 * @param string $message
 * @param Binkap\Laraflash\Mode $mode
 * @return Binkap\Laraflash\Flash
 */
function flash(string $message = '', Mode $mode = Mode::DEFAULT): Flash
{
    return new Flash(message: $message, mode: $mode);
}

/**
 * Create a flash message
 *
 * @param string $message
 * @param Binkap\Laraflash\Mode $mode
 * @return Binkap\Laraflash\Flash
 */
function alert(string $message = '', Mode $mode = Mode::DEFAULT): Flash
{
    return new Flash(message: $message, mode: $mode);
}
