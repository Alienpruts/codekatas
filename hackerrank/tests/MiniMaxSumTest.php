<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 21:35
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class MiniMaxSumTest extends TestCase
{
    public function testIfMinimumAndMaximumSumsAreCalculated(): void
    {
        $miniMaxSum = new MiniMaxSum();

        $array = [1, 2, 3, 4, 5];
        $array2 = [7, 69, 2, 221, 8974];

        $this->assertEquals('10 14', $miniMaxSum->miniMaxSum($array));
        $this->assertEquals('299 9271', $miniMaxSum->miniMaxSum($array2));
    }
}
