<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 23/11/18
 * Time: 17:26
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class Day7ArraysTest extends TestCase
{
    public function testIfArrayIsReversed(): void
    {
        $actual = [1, 4, 3, 2];
        $expected = [2, 3, 4, 1];
        $actual2 = [1, 2, 3, 4, 5, 6];
        $expected2 = [6, 5, 4, 3, 2, 1];
        $day7Arrays = new Day7Arrays();

        $this->assertSame($expected, $day7Arrays->reverseArray($actual));
        $this->assertSame($expected2, $day7Arrays->reverseArray($actual2));
    }
}
