<?php

namespace Binkap\Laraflash\Alert;

enum Mode: string
{
    case INFO = 'laraflash.alert.MODE.INFO';

    case SUCCESS = 'laraflash.alert.MODE.SUCCESS';

    case WARN = 'laraflash.alert.MODE.WARN';

    case ERROR = 'laraflash.alert.MODE.ERROR';
}
