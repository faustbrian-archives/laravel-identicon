# Laravel Identicon

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Identicon/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Identicon)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-identicon.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Identicon.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Identicon/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Identicon.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Identicon)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-identicon
```

## Usage

``` php
<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasIdenticon;

    /** @var array */
    public $identicon = [
        'from' => 'email',
        'to' => 'avatar'
    ];
}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
