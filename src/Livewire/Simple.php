<?php

namespace Binkap\Laraflash\Livewire;


use Binkap\Laraflash\Alert\Builder;
use Binkap\Laraflash\Alert\Data;
use Binkap\Laraflash\Alert\Type;
use Livewire\Component;

class Simple extends Component
{
    public bool $visible = false;

    protected $listeners = [
        Type::SIMPLE->value => 'alert'
    ];

    private Builder $builder;

    public function mount()
    {
        if (!empty(($data = new Data)->getMessage()) && $data->getType() == Type::SIMPLE->value) {
            $this->alert(data: $data, builder: new Builder);
        }
    }

    public function close()
    {
        $this->visible = false;
    }

    public function alert(Data $data, Builder $builder)
    {
        $this->builder = $builder->setData(data: $data);
        $this->visible = true;
    }

    public function render()
    {
        return view(\config('laraflash.views.simple'), data: [
            'builder' => $this->builder ?? new Builder,
        ]);
    }
}
