<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Bridge\Tests;

use Structural\Bridge\{Lowercase, ServiceBridge, Uppercase};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class BridgeTest extends PHPUnit_Framework_TestCase
{
    public function testStringOutput()
    {
        $service = new ServiceBridge(new Uppercase());
        $this->assertEquals("STRING", $service->doSomething("String"));
    }

    public function testIntOutput()
    {
        $service = new ServiceBridge(new Lowercase());
        $this->assertEquals("string", $service->doSomething("String"));
    }
}
