<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 17:18
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class OrangesAndApplesTest extends TestCase
{
    public function testIfNumberOfOrangesAndApplesAreCalculated(): void
    {
        $orangesAndApples = new OrangesAndApples();

        $s = 7;
        $t = 10;
        $a = 5;
        $b = 15;
        $apples = [-2, 2, 1];
        $oranges = [5, -6];

        $s2 = 7;
        $t2 = 10;
        $a2 = 4;
        $b2 = 12;
        $apples2 = [2, 3, -4];
        $oranges2 = [3, -2, -4];


        $this->assertEquals([1, 1], $orangesAndApples->calculate($s, $t, $a, $b, $apples, $oranges));
        $this->assertEquals([1, 2], $orangesAndApples->calculate($s2, $t2, $a2, $b2, $apples2, $oranges2));
    }

}
