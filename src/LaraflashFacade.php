<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Alert\Mode;
use Binkap\Laraflash\Alert\Type;
use Livewire\Component;

class LaraflashFacade extends Flash
{
    public function message(string $message)
    {
        $this->data->set($this->data->messageKey, $message);
        return $this;
    }

    public function header(string $header)
    {
        $this->data->set($this->data->headerKey, $header);
        return $this;
    }

    public function livewire(Component $component): void
    {
        $component->dispatch($this->data->getType());
    }

    public function simple()
    {
        $this->data->set($this->data->typeKey, Type::SIMPLE->value);
        return $this;
    }

    public function overlay()
    {
        $this->data->set($this->data->typeKey, Type::OVERLAY->value);
        return $this;
    }

    public function info()
    {
        $this->data->set($this->data->modeKey, Mode::INFO->value);
        return $this;
    }

    public function success()
    {
        $this->data->set($this->data->modeKey, Mode::SUCCESS->value);
        return $this;
    }

    public function warn()
    {
        $this->data->set($this->data->modeKey, Mode::WARN->value);
        return $this;
    }

    public function error()
    {
        $this->data->set($this->data->modeKey, Mode::ERROR->value);
        return $this;
    }
}
