<?php



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
