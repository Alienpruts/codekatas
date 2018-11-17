<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 14:40
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class DiagonalDifferenceTest extends TestCase
{
    public function testAbsoluteDifferenceOfArrayDiagonals(): void
    {
        $diagonalDifference = new DiagonalDifference();

        $array = [
            [11, 2, 4],
            [4, 5, 6],
            [10, 8, -12],
        ];
        $array2 = [
            [1, 2, 3],
            [4, 5, 6],
            [9, 8, 9],
        ];

        $this->assertEquals(15, $diagonalDifference->diagonalDifference($array));
        $this->assertEquals(2, $diagonalDifference->diagonalDifference($array2));
    }
}
