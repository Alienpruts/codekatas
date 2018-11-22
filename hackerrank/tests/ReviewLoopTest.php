<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 16:20
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class ReviewLoopTest extends TestCase
{
    public function testIfEvenIndexedAndOddIndexedAreReturned(): void
    {

        $reviewLoop = new ReviewLoop();
        $actual = 'Hacker';
        $expected = 'Hce akr';

        $actual2 = 'Rank';
        $expected2 = 'Rn ak';

        $this->assertSame($expected, $reviewLoop->calculateEvenOdd($actual));
        $this->assertSame($expected2, $reviewLoop->calculateEvenOdd($actual2));
    }
}
