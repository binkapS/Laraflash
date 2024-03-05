<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Mode;
use Binkap\Laraflash\Flash;

function flash(string $message = '', Mode $mode = Mode::DEFAULT): Flash
{
    return new Flash(message: $message, mode: $mode);
}

function alert(string $message = '', Mode $mode = Mode::DEFAULT): Flash
{
    return new Flash(message: $message, mode: $mode);
}
