<?php

namespace Binkap\Laraflash\Livewire;

use Livewire\Component;

class Container extends Component
{
    public function render()
    {
        return view(\config('laraflash.views.container'));
    }
}
