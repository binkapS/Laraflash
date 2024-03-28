<?php

namespace Binkap\Laraflash;

use Binkap\Laraflash\Mode;

class Flash
{
    /**
     * Message to be Flashed
     *
     * @var string
     */
    private string $message;

    /**
     * Flash Mode (Default Mode::DEFAULT)
     *
     * @var Mode
     */
    private Mode $mode;

    /**
     *
     *
     * @var boolean
     */
    private bool $livewire = false;

    /**
     * Class Constructor
     *
     * @param string $message
     * @param Binkap\Laraflash\Mode $mode
     */
    public function __construct(string $message = '', Mode $mode = Mode::DEFAULT)
    {
        $this->message = $message;
        $this->mode = $mode;
    }

    /**
     * Set Message
     *
     * @param string $message
     * @return static
     */
    public function message(string $message): static
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Set Mode to Success
     * Use for Success Messages
     */
    public function success(): static
    {
        $this->mode = Mode::SUCCESS;
        return $this;
    }

    /**
     * Set Mode to Warning
     * Use for Warning Messages
     */
    public function warning(): static
    {
        $this->mode = Mode::WARNING;
        return $this;
    }

    /**
     * Set Mode to Danger(Error)
     * Use for Danger(Error) Messages
     */
    public function danger(): static
    {
        $this->mode = Mode::DANGER;
        return $this;
    }

    /**
     * User Livewire to flash
     *
     * @param \Livewire\Component $component
     * @return void
     */
    public function livewire(\Livewire\Component $component): void
    {
        $this->livewire = true;
        $component->dispatch(
            'laraflash-messages',
            ['laraflashMessages' => $this->build()],
        );
    }

    /**
     * Class Destructor
     */
    public function __destruct()
    {
        if (!$this->livewire) {
            session(['laraflash-messages' => array_merge_recursive(
                session('laraflash-messages', []),
                $this->build()
            )]);
        }
    }

    /**
     * Build the flash Message
     *
     * @return array
     */
    private function build(): array
    {
        return [
            $this->mode->value => [$this->message],
        ];
    }
}
