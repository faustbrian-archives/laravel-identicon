<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Identicon\Facades;

use BrianFaust\Identicon\Facades\Identicon;
use BrianFaust\Tests\Identicon\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class IdenticonTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'identicon';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Identicon::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return \Identicon\Identicon::class;
    }
}
