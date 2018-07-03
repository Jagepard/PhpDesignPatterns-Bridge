<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Bridge;

/**
 * Class OutputBridge
 * @package Structural\Bridge
 */
class OutputBridge
{

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * Service constructor.
     * @param $output
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * @param $input
     */
    public function doSomething($input)
    {
        return $this->output->doSomething($input);
    }
}
