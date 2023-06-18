<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Alert\Mode;
use Binkap\Laraflash\Alert\Type;
use Binkap\Laraflash\Flash;
use Livewire\Component;

define('LARAFLASH_TYPE_SIMPLE', Type::SIMPLE);
define('LARAFLASH_TYPE_OVERLAY', Type::OVERLAY);
define('LARAFLASH_MODE_INFO', Mode::INFO);
define('LARAFLASH_MODE_SUCCESS', Mode::SUCCESS);
define('LARAFLASH_MODE_WARN', Mode::WARN);
define('LARAFLASH_MODE_ERROR', Mode::ERROR);



function flash(
    string $message = '',
    string $header = '',
    Type $type = Type::SIMPLE,
    Mode $mode = Mode::INFO,
    Component|null $component = null,
) {
    return (new Flash)->initialize(
        message: $message,
        header: $header,
        type: $type,
        mode: $mode,
        component: $component
    );
}

function alert(
    string $message = '',
    string $header = '',
    Type $type = Type::SIMPLE,
    Mode $mode = Mode::INFO,
    Component|null $component = null,
) {
    return (new Flash)->initialize(
        message: $message,
        header: $header,
        type: $type,
        mode: $mode,
        component: $component
    );
}
