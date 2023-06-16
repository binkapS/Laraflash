<?php

namespace Binkap\Laraflash\Alert;

class Builder
{
    private Data $data;

    private string $icon = '';

    private string $header = '';

    private string $message = '';

    private string $color = '';

    public function setData(Data $data)
    {
        $this->data = $data;
        $this->setMessage();
        $this->setHeader();
        switch ($data->getMode()) {
            case Mode::SUCCESS->value:
                $this->success();
                break;
            case Mode::WARN->value:
                $this->warning();
                break;
            case Mode::ERROR->value:
                $this->error();
                break;
            default:
                $this->info();
                break;
        }
        $data->forget();
        return $this;
    }

    public function icon()
    {
        return $this->icon;
    }

    public function header()
    {
        return $this->header;
    }

    public function message()
    {
        return $this->message;
    }

    public function color()
    {
        return $this->color;
    }

    private function info()
    {
        $this->color = 'blue';
        $this->icon = 'ri-information-fill';
    }

    private function success()
    {
        $this->color = 'emerald';
        $this->icon = 'ri-checkbox-circle-fill';
    }

    private function warning()
    {
        $this->color = 'yellow';
        $this->icon = 'ri-alarm-warning-fill';
    }

    private function error()
    {
        $this->color = 'red';
        $this->icon = 'ri-close-circle-fill';
    }

    private function setMessage()
    {
        $this->message = $this->data->getMessage();
    }

    private function setHeader()
    {
        $this->header = $this->data->getHeader();
    }
}
