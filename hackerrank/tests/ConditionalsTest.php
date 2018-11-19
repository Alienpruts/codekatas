<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 9:05
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class ConditionalsTest extends TestCase
{
    public function testIfWeirdIsDisplayed(): void
    {
        $conditional = new Conditional();

        $expected = 'Weird';

        $this->assertEquals($expected, $conditional->conditional(13));
        $this->assertEquals($expected, $conditional->conditional(27));
        $this->assertEquals($expected, $conditional->conditional(6));
        $this->assertEquals($expected, $conditional->conditional(8));
        $this->assertEquals($expected, $conditional->conditional(10));
        $this->assertEquals($expected, $conditional->conditional(12));
        $this->assertEquals($expected, $conditional->conditional(14));
        $this->assertEquals($expected, $conditional->conditional(16));
        $this->assertEquals($expected, $conditional->conditional(18));
        $this->assertEquals($expected, $conditional->conditional(20));
    }

    public function testIfNotWeirdIsDisplayed(): void
    {
        $conditional = new Conditional();

        $expected = 'Not Weird';

        $this->assertEquals($expected, $conditional->conditional(22));
        $this->assertEquals($expected, $conditional->conditional(50));
        $this->assertEquals($expected, $conditional->conditional(2));
        $this->assertEquals($expected, $conditional->conditional(4));
    }
}
