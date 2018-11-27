<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 27/11/18
 * Time: 22:53
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class TwoDimensionalArraysTest extends TestCase
{
    public function testIfLargestSumOfAllHourglassFiguresInArrayIsCalculated(): void
    {
        $twoDimensionalArray = new TwoDimensionalArrays();

        $value = [
            [1, 1, 1, 0, 0, 0],
            [0, 1, 0, 0, 0, 0],
            [1, 1, 1, 0, 0, 0],
            [0, 0, 2, 4, 4, 0],
            [0, 0, 0, 2, 0, 0],
            [0, 0, 1, 2, 4, 0],
        ];

        $expected = 19;

        $this->assertSame($expected, $twoDimensionalArray->calculateMaxSumHourglass($value));
    }


}
