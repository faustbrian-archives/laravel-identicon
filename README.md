# Laravel Identicon

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-flash
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    BrianFaust\Identicon\IdenticonServiceProvider::class
];
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

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
