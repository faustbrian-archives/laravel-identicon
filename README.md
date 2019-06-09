# Laravel Identicon

[![Build Status](https://img.shields.io/travis/artisanry/Identicon/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Identicon)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/identicon.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Identicon.svg?style=flat-square)](https://github.com/artisanry/Identicon/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Identicon.svg?style=flat-square)](https://packagist.org/packages/artisanry/Identicon)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/identicon
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

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
