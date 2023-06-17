<?php

namespace Binkap\Laraflash\Alert;

class Builder
{
    private Data $data;

    private string $icon = '';

    private string $header = '';

    private string $message = '';

    private string $textColor = '';

    private string $bgColor = '';

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

    public function bgColor()
    {
        return $this->bgColor;
    }

    public function textColor()
    {
        return $this->textColor;
    }

    private function info()
    {
        $this->textColor = 'text-blue-500';
        $this->bgColor = 'bg-blue-500';
        $this->icon = '<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
        </svg>';
    }

    private function success()
    {
        $this->textColor = 'text-emerald-500';
        $this->bgColor = 'bg-emerald-500';
        $this->icon = '<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
        </svg>';
    }

    private function warning()
    {
        $this->textColor = 'text-amber-500';
        $this->bgColor = 'bg-amber-500';
        $this->icon = '<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
        </svg>';
    }

    private function error()
    {
        $this->textColor = 'text-red-500';
        $this->bgColor = 'bg-red-500';
        $this->icon = '<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
        </svg>';
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
