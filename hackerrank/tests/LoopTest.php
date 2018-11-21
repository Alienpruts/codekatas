<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:29
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class LoopTest extends TestCase
{
    public function testIfMultiplesAreReturned(): void
    {
        $value = 2;
        $expected = range($value, 20, $value);

        $value2 = 5;
        $expected2 = range($value2, 50, $value2);

        $loop = new Loop();

        $this->assertSame($expected, $loop->calculateMultiples($value));
        $this->assertSame($expected2, $loop->calculateMultiples($value2));
    }
}
