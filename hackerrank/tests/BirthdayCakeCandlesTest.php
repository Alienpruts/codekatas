<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 9:41
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class BirthdayCakeCandlesTest extends TestCase
{
    public function testIfNumberOfTallestCandlesIsShown(): void
    {
        $birthdayCandles = new BirthdayCakeCandles();

        $array1 = [1, 3, 3, 2];
        $array2 = [1, 3, 6, 2, 3, 3, 5];
        $array3 = [1, 3, 3, 2, 2, 3, 2, 1, 1];

        $this->assertEquals(2, $birthdayCandles->birthdayCandles($array1));
        $this->assertEquals(1, $birthdayCandles->birthdayCandles($array2));
        $this->assertEquals(3, $birthdayCandles->birthdayCandles($array3));
    }
}
