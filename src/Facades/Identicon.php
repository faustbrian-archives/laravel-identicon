<?php

/*
 * This file is part of Laravel Identicon.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Identicon\Facades;

use Illuminate\Support\Facades\Facade;

class Identicon extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'identicon';
    }
}
