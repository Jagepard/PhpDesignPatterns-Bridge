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

    /**
     * Sets up a bridge
     * ----------------
     * Устанавливает мост
     * 
     * @param  BridgeInterface $output
     */
    public function __construct(BridgeInterface $output)
    {
        $this->output = $output;
    }

    /**
     * Performs some action
     * --------------------
     * Выполняет какое-то действие
     * 
     * @param  string $input
     * @return void
     */
    public function doSomething(string $input)
    {
        return $this->getOutput()->doSomething($input);
    }

    /**
     * Gets the result
     * ---------------
     * Получает результат
     * 
     * @return BridgeInterface
     */
    public function getOutput(): BridgeInterface
    {
        return $this->output;
    }
}
