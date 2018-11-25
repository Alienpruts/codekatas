<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 1:27
 */

namespace CodeKatas\Codewars;

use PHPUnit\Framework\TestCase;

class HighestLowestTest extends TestCase
{
    public function testIfHighestAndLowestNumbersAreReturned(): void
    {
        $highestAndLowest = new HighestLowest();

        $this->assertEquals('5 1', $highestAndLowest->calculateHighestLowest('1 2 3 4 5'));
        $this->assertEquals('5 -3', $highestAndLowest->calculateHighestLowest('1 2 -3 4 5'));
        $this->assertEquals('9 -5', $highestAndLowest->calculateHighestLowest('1 9 3 4 -5'));

    }
}
