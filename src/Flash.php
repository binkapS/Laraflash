<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Alert\Data;
use Binkap\Laraflash\Alert\Mode;
use Binkap\Laraflash\Alert\Type;
use Livewire\Component;

class Flash
{
    private Component|null $component = null;

    protected Data $data;

    public function __construct()
    {
        $this->data = new Data;
    }

    public function initialize(
        string $message,
        string $header,
        Type $type,
        Mode $mode,
        Component|null $component,
    ): Flash|null {
        $this->component = $component;
        $this->data->setHeader($header);
        $this->data->setMessage($message);
        $this->data->setMode($mode);
        $this->data->setType($type);
        return $this;
    }

    public function message(string $message)
    {
        $this->data->setMessage($message);
        return $this;
    }

    public function header(string $header)
    {
        $this->data->setHeader($header);
        return $this;
    }

    public function livewire(Component $component)
    {
        $this->component = $component;
        return $this;
    }

    public function simple()
    {
        return $this->setType(Type::SIMPLE);
    }

    public function overlay()
    {
        return $this->setType(Type::OVERLAY);
    }

    public function info()
    {
        return $this->setMode(Mode::INFO);
    }

    public function success()
    {
        return $this->setMode(Mode::SUCCESS);
    }

    public function warn()
    {
        return $this->setMode(Mode::WARN);
    }

    public function error()
    {
        return $this->setMode(Mode::ERROR);
    }

    public function __destruct()
    {
        $this->data->build();
        if (!\is_null($this->component)) {
            $this->component->dispatch($this->data->getType());
        }
    }

    private function setType(Type $type)
    {
        $this->data->setType($type);
        return $this;
    }

    private function setMode(Mode $mode)
    {
        $this->data->setMode($mode);
        return $this;
    }
}
