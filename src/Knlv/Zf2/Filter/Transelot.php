<?php

/**
 * Knlv\Zf2\Filter\Transelot
 *
 * @link https://github.com/kanellov/zf2-filter
 * @copyright Copyright (c) 2015 Vassilis Kanellopoulos - contact@kanellov.com
 * @license https://raw.githubusercontent.com/kanellov/zf2-filter/master/LICENSE
 */

namespace Knlv\Zf2\Filter;

use Zend\Filter\FilterInterface;

class Transelot implements FilterInterface
{
    public function filter($value)
    {
        return \Knlv\transelot($value);
    }
}
