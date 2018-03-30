<?php
/**
 * Date: 30.03.18
 * Time: 16:19
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Bridge;


interface OutputInterface
{

    /**
     * @param $input
     */
    public function doSomething($input);
}