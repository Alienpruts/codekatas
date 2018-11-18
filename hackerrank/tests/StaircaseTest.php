<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 16:46
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class StaircaseTest extends TestCase
{
    public function testIfStaircaseIsDrawnCorrectly(): void
    {
        $staircase = new Staircase();
        $expected = "   #\n  ##\n ###\n####";
        $expected2 = "    #\n   ##\n  ###\n ####\n#####";

        $this->assertEquals($expected, $staircase->drawStaircase(4));
        $this->assertEquals($expected2, $staircase->drawStaircase(5));
    }
}
