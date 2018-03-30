<?php
/**
 * Date: 30.03.18
 * Time: 16:27
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Bridge;


class OutputBridge implements OutputInterface
{

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
        return $this->getOutput()->doSomething($input);
    }

    /**
     * @return OutputInterface
     */
    public function getOutput(): OutputInterface
    {
        return $this->output;
    }
}