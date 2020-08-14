<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Bridge;

class Lowercase implements BridgeInterface
{
    public function doSomething(string $input): string
    {
        return strtolower($input);
    }
}
