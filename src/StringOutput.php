<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Bridge;

/**
 * Class StringOutput
 * @package Structural\Bridge
 */
class StringOutput implements OutputInterface
{
    /**
     * @param string $input
     * @return string
     */
    public function doSomething($input): string
    {
        return $input;
    }
}
