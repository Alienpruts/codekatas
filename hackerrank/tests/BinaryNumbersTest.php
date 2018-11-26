<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 26/11/18
 * Time: 21:57
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class BinaryNumbersTest extends TestCase
{
    public function testIfConsecutiveOnesAreReturned(): void
    {
        $binaryNumbers = new BinaryNumbers();

        $this->assertEquals(1, $binaryNumbers->calculateConsecutive(5));
        $this->assertEquals(2, $binaryNumbers->calculateConsecutive(13));
    }

}
