<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Mode;

class Flash
{
    private string $message;

    private Mode $mode;

    private bool $livewire = false;

    public function __construct(string $message = '', Mode $mode = Mode::DEFAULT)
    {
        $this->message = $message;
        $this->mode = $mode;
    }

    public function message(string $message): static
    {
        $this->message = $message;
        return $this;
    }

    public function success(): static
    {
        $this->mode = Mode::SUCCESS;
        return $this;
    }

    public function warning(): static
    {
        $this->mode = Mode::WARNING;
        return $this;
    }

    public function danger(): static
    {
        $this->mode = Mode::DANGER;
        return $this;
    }

    public function livewire(\Livewire\Component $component): void
    {
        $this->livewire = true;
        $component->dispatch(
            'laraflash-messages',
            ['laraflashMessages' => $this->build()],
        );
    }

    public function __destruct()
    {
        if (!$this->livewire) {
            session(['laraflash-messages' => $this->build()]);
        }
    }

    private function build(): array
    {
        return [
            $this->mode->value => [$this->message],
        ];
    }
}
