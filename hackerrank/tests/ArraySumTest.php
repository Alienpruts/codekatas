<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 10:32
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class ArraySumTest extends TestCase
{
    public function testIfSumOfAllElementsInArrayIsGiven(): void
    {
        $arraySum = new ArraySum();

        $array = [1, 2, -4, 10, -5];
        $array2 = [-10, -100, 50, 25];
        $array3 = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

        $this->assertEquals(4, $arraySum->arraySum($array));
        $this->assertEquals(-35, $arraySum->arraySum($array2));
        $this->assertEquals(5000000015, $arraySum->arraySum($array3));


    }
}
