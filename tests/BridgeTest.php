<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Bridge\Tests;

use Structural\Bridge\JsonOutput;
use Structural\Bridge\OutputBridge;
use Structural\Bridge\StringOutput;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class BridgeTest extends PHPUnit_Framework_TestCase
{
    public function testStringOutput()
    {
        $service = new OutputBridge(new StringOutput());
        $this->assertEquals('String', $service->doSomething('String'));
    }

    public function testIntOutput()
    {
        $service = new OutputBridge(new JsonOutput());
        $this->assertEquals('"String"', $service->doSomething('String'));
    }
}
