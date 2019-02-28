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
class JsonOutput implements OutputInterface
{
    /**
     * @param $input
     * @return string
     */
    public function doSomething($input): string
    {
        return \json_encode($input);
    }
}
