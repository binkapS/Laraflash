<?php

namespace Binkap\Laraflash\Alert;

class Data
{
    public string $headerKey = DataKey::HEADER->value;

    public string $messageKey = DataKey::MESSAGE->value;

    public string $modeKey = DataKey::MODE->value;

    public string $typeKey = DataKey::TYPE->value;

    private string $header = '';

    private string $message = '';

    private Type $type = Type::SIMPLE;

    private Mode $mode = Mode::INFO;

    public function setHeader(string $header)
    {
        $this->header = $header;
        return $this;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }

    public function setMode(Mode $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    public function setType(Type $type)
    {
        $this->type = $type;
        return $this;
    }

    public function getHeader(): string
    {
        return $this->get($this->headerKey);
    }

    public function getMessage(): string
    {
        return $this->get($this->messageKey);;
    }

    public function getMode(): string
    {
        return $this->get($this->modeKey);
    }

    public function getType()
    {
        return $this->get($this->typeKey);
    }

    public function forget()
    {
        \session()->forget([
            $this->headerKey,
            $this->messageKey,
            $this->modeKey,
            $this->typeKey
        ]);
    }

    public function build()
    {
        \session([
            $this->headerKey => $this->header,
            $this->messageKey => $this->message,
            $this->modeKey => $this->mode->value,
            $this->typeKey => $this->type->value
        ]);
    }

    private function get(string $key)
    {
        return \session($key, '');
    }
}
