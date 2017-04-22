<?php



declare(strict_types=1);



namespace BrianFaust\Identicon;

use Identicon\Identicon;

/**
 * Generate an identicon.
 *
 * @param mixed $value
 *
 * @return string
 */
function identicon($value): string
{
    $generator = config('identicon.generator');

    $identicon = new Identicon(new $generator());

    return $identicon->getImageDataUri($value);
}
