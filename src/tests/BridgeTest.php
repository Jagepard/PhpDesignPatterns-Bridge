<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Bridge\OutputBridge;
use Structural\Bridge\StringOutput;
use Structural\Bridge\IntOutput;


/**
 * Class SingletonsPoolTest
 */
class BridgeTest extends PHPUnit_Framework_TestCase
{

    protected function setUp(): void
    {

    }

    public function testStringOutput()
    {
        $service = new OutputBridge(new StringOutput());
        $this->assertEquals('String', $service->doSomething('String'));
    }

    public function testIntOutput()
    {
        $service = new OutputBridge(new IntOutput());
        $this->assertEquals(112358, $service->doSomething('112358'));
    }
}
