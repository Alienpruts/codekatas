<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 11:33
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class CompareTripletsTest extends TestCase
{
    public function testIfComparisonScoreIsCalculatedFromArrayTriplets(): void
    {
        $compareTriplets = new CompareTriplets();
        $array1 = [5, 6, 7];
        $array2 = [3, 6, 10];
        $array3 = [50, 15, 75];
        $array4 = [45, 25, 90];


        $this->assertEquals([1, 1], $compareTriplets->compareTriplets($array1, $array2));
        $this->assertEquals([1, 2], $compareTriplets->compareTriplets($array3, $array4));
        $this->assertEquals([2, 1], $compareTriplets->compareTriplets($array4, $array3));
        $this->assertEquals([0, 3], $compareTriplets->compareTriplets($array1, $array3));
    }
}
