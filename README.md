# Laraflash

<p align="center">Flash Session messages for Laravel and Livewire</p>

<p align="center">
<a href="https://packagist.org/packages/binkap/laraflash"><img src="https://img.shields.io/packagist/dt/binkap/laraflash" alt="Total Installs"></a>
<a href="https://packagist.org/packages/binkap/laraflash"><img src="https://img.shields.io/packagist/v/binkap/laraflash" alt="Latest Stable Version"></a>
<a href="LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-round" alt="Software License"></a>
</p>

## Installation

```bash
composer require binkap/laraflash 
```

## Add the flash container to your layout

```html
 <x-laraflash::container />
```

## Laraflash currently uses Tailwind CSS

```js
export default {
    content: [
        "./vendor/binkap/laraflash/src/views/**/*.blade.php",
    ],
}
```

## Flashing messages

Choose the method most convenient for you.

## 1: Helper Functions

```php
use function Binkap\Laraflash\flash;


flash()->message('Message sent successfully')
->success() // Optional (Uses default when not specified)
->livewire($component); /* Call the livewire method to flash the message with livewire */
```

## Or

```php
use function Binkap\Laraflash\alert;

alert()->message('Message sent successfully')
->success() // Optional (Uses default when not specified)
->livewire($component); /* Call the livewire method to flash the message with livewire */
```

## 2: Facade

```php
use Binkap\Laraflash\Laraflash;

Laraflash::message('Provide a valid message')
->warning()
->livewire($component); /* Call the livewire method to flash the message with livewire */
```

## All methods

```php
// MODE methods

$flash->success()  // For success
$flash->warning()  // For warnings
$flash->danger() // For errors
```

## Rendered messages

Here are example of rendered messages

### DarkMode

<p align="center"><img src="https://www.binkap.com/storage/laraflash/bm3thocdrsnaix0qay9p.png" alt="DarkMode flash"></p>

### LightMode

<p align="center"><img src="https://www.binkap.com/storage/laraflash/sys5i3mw659agn3hcx1e.png" alt="LightMode flash"></p>

See [CHANGELOG](CHANGELOG.md) for Changes
