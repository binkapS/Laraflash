<?php

namespace Binkap\Laraflash;

enum Mode: string
{
    case DEFAULT = 'default';

    case SUCCESS = 'success';

    case WARNING = 'warning';

    case DANGER = 'danger';
}
