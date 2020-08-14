<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Bridge;

class ServiceBridge implements BridgeInterface
{
    private BridgeInterface $output;

    public function __construct(BridgeInterface $output)
    {
        $this->output = $output;
    }

    public function doSomething(string $input)
    {
        return $this->getOutput()->doSomething($input);
    }

    public function getOutput(): BridgeInterface
    {
        return $this->output;
    }
}
