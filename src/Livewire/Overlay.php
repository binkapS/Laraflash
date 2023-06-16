<?php

namespace Binkap\Laraflash\Livewire;

use Binkap\Laraflash\Alert\Builder;
use Binkap\Laraflash\Alert\Data;
use Binkap\Laraflash\Alert\DataKey;
use Binkap\Laraflash\Alert\Type;
use Livewire\Component;

class Overlay extends Component
{
    public bool $visible = false;

    protected $listeners = [
        Type::OVERLAY->value => 'alert'
    ];

    private Builder $builder;

    public function mount()
    {
        if (!\is_null(\session(DataKey::MESSAGE->value, null)) && ($data = new Data)->getType() == Type::OVERLAY->value) {
            $this->alert(data: $data, builder: new Builder);
        }
    }

    public function alert(Data $data, Builder $builder)
    {
        $this->builder = $builder->setData(data: $data);
        $this->visible = true;
    }

    public function render()
    {
        return view(\config('laraflash.views.overlay'), data: [
            'builder' => $this->builder ?? new Builder
        ]);
    }
}
