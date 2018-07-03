<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Bridge;

/**
 * Class IntOutput
 * @package Structural\Bridge
 */
class IntOutput implements OutputInterface
{

    /**
     * @param string $input
     * @return string
     */
    public function doSomething($input)
    {
        return (int)$input;
    }
}
