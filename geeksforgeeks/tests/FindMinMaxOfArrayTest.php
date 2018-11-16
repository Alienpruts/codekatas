<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 10:36
 */

namespace CodeKatas\GeeksForGeeks;

use PHPUnit\Framework\TestCase;

class FindMinMaxOfArrayTest extends TestCase
{

    public function testIfMinimumValueOfArrayIsFound(): void
    {
        $sequence1 = [4, 8, 6, 2];
        $sequence2 = [5552, 786287, 243, 90927, -13, 236];
        $minMaxArray = new MinMaxArray();

        $this->assertEquals(2, $minMaxArray->getMinValue($sequence1), 'The minimum value should be 2');
        $this->assertEquals(-13, $minMaxArray->getMinValue($sequence2), 'The minimum value should be -13');
    }

    public function testIfMaximumValueOfArrayIsFound(): void
    {
        $sequence1 = [4, 8, 6, 2];
        $sequence2 = [5552, 786287, 243, 90927, -13, 236];
        $minMaxArray = new MinMaxArray();

        $this->assertEquals(8, $minMaxArray->getMaxValue($sequence1), 'The maximum value should be 8');
        $this->assertEquals(786287, $minMaxArray->getMaxValue($sequence2), 'The maximum value should be 786287');
    }

}
