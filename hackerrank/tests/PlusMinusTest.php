<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 17:14
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class PlusMinusTest extends TestCase
{
    public function testIfRatiosOfPositiveNegativesAndZerosAreCalculated(): void
    {
        $plusMinus = new PlusMinus();

        $array1 = [-4, 3, -9, 0, 4, 1];
        $array2 = [4, 3, 9, 5, 4, 1];
        $array3 = [-4, -3, -9, -6, -4, -1];

        $expected = '0.500000' . PHP_EOL . '0.333333' . PHP_EOL . '0.166667';
        $expected2 = '1.000000' . PHP_EOL . '0.000000' . PHP_EOL . '0.000000';
        $expected3 = '0.000000' . PHP_EOL . '1.000000' . PHP_EOL . '0.000000';

        $this->assertEquals($expected, $plusMinus->plusMinus($array1));
        $this->assertEquals($expected2, $plusMinus->plusMinus($array2));
        $this->assertEquals($expected3, $plusMinus->plusMinus($array3));
    }
}
