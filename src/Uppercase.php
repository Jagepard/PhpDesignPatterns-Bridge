<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Bridge;

class Uppercase implements BridgeInterface
{
    /**
     * Performs some action
     * --------------------
     * Выполняет какое-то действие
     *
     * @param  string $input
     * @return string
     */
    public function doSomething(string $input): string
    {
        return strtoupper($input);
    }
}
