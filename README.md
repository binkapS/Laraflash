# Laraflash

<p align="center">Flash Session messages for Laravel and Livewire</p>

<p align="center">
<a href="https://packagist.org/packages/binkap/laraflash"><img src="https://img.shields.io/packagist/dt/binkap/laraflash" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/binkap/laraflash"><img src="https://img.shields.io/packagist/v/binkap/laraflash" alt="Latest Stable Version"></a>
<a href="LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-round" alt="Software License"></a>
</p>

## Installation

```bash
composer require binkap/laraflash 
```

#

## Publish assets

```bash
php artisan vendor:publish --tag=laraflash-assets
```

#

## Add the flash styles directive to layout

```html
<head>
    @laraflashStyles()
</head>
```

#

## Add the flash container to your layout

```html
<livewire:laraflash.container />
```

#

## Flashing messages

There are many syntax variations for adding flash messages, so you can choose the one you like the most.

## 1: Helper Functions

#

### Method chaining

```php
use function Binkap\Laraflash\flash;


flash()->message('Message sent successfully')
->header('Success') // Headers are Optional
->Overlay()  // Default is set to simple
->success() // Default is set to info
->livewire($component); /* Call the livewire method to flash the message with livewire */

```

## Or

```php
use function Binkap\Laraflash\alert;

alert()->message('Message sent successfully')
->header('Success') // Headers are Optional
->Overlay()  // Default is set to simple
->success() // Default is set to info
->livewire($component); /* Call the livewire method to flash the message with livewire */
```

#

### Parameters

```php
use function Binkap\Laraflash\flash;

// Using Constants

flash(
    message: 'Message sent successfully', 
    header: 'Success', /* Optional*/
    type: LARAFLASH_TYPE_OVERLAY, /* Default set to LARAFLASH_TYPE_INFO*/
    mode: LARAFLASH_MODE_ERROR, /* Default set to LARAFLASH_MODE_INFO*/
    livewire: $component /* Pass a livewire component to flash the message with livewire */
    ); 
```

## Or

```php

use Binkap\Laraflash\Type;
use Binkap\Laraflash\Mode;

use function Binkap\Laraflash\flash;

// Using ENUMs

flash(
    message: 'Message sent successfully', 
    header: 'Success', /* Optional*/
    type: Type::OVERLAY, /* Default set to Type::OVERLAY */
    mode: Mode::WARN, /* Default set to Mode::INFO*/
    livewire: $component /* Pass a livewire component to flash the message with livewire */
    ); 
```

## 2: Facade

#

### Method chaining

```php
use Binkap\Laraflash\Laraflash;

Laraflash::message('Message sent successfully')
->header('Success') // Headers are Optional
->Overlay()  // Default is set to simple
->success() // Default is set to info
->livewire($component); /* Call the livewire method to flash the message with livewire */
```

#

### Parameters

```php
use Binkap\Laraflash\Laraflash;

// Using Constants

Laraflash::initialize(
    message: 'Message sent successfully', 
    header: 'Success', /* Optional*/
    type: LARAFLASH_TYPE_OVERLAY, /* Default set to LARAFLASH_TYPE_INFO*/
    mode: LARAFLASH_MODE_ERROR, /* Default set to LARAFLASH_MODE_INFO*/
    livewire: $component /* Pass a livewire component to flash the message with livewire */
    ); 
```

## Or

```php

use Binkap\Laraflash\Type;
use Binkap\Laraflash\Mode;

use Binkap\Laraflash\Laraflash;

// Using ENUMs

Laraflash::initialize(
    message: 'Message sent successfully', 
    header: 'Success', /* Optional*/
    type: Type::OVERLAY, /* Default set to Type::OVERLAY */
    mode: Mode::WARN, /* Default set to Mode::INFO*/
    livewire: $component /* Pass a livewire component to flash the message with livewire */
    ); 
```

#

## All methods

```php
// TYPE methods

$flash->simple()  // Render a the message using the simple layout
$flash->overlay() // Render the message using the overlay layout

// MODE methods

$flash->success()  // For success messages
$flash->info()  // For information
$flash->warn()  // For warnings
$flash->error() // For errors
```

## All enums

```php

use Binkap\Laraflash\Type;
use Binkap\Laraflash\Mode;

// TYPE Enum

Type::SIMPLE_  // Render a the message using the simple layout
Type::OVERLAY // Render the message using the overlay layout

// MODE Enum

Mode::SUCCESS  // For success messages
Mode::INFO  // For information
Mode::WARN  // For warnings
Mode::ERROR // For errors
```

## All Constants

```php
// TYPE constants

LARAFLASH_TYPE_SIMPLE_  // Render a the message using the simple layout
LARAFLASH_TYPE_OVERLAY // Render the message using the overlay layout

// MODE constants

LARAFLASH_MODE_SUCCESS  // For success messages
LARAFLASH_MODE_INFO  // For information
LARAFLASH_MODE_WARN  // For warnings
LARAFLASH_MODE_ERROR // For errors
```

## Rendered messages

Here are example of rendered messages (In this case success)

### Simple

<p align="center"><img src="extra/simple.png" alt="Simple flash"></p>

#

### Overlay

<p align="center"><img src="extra/overlay.png" alt="Overlay flash"></p>
