<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 9:32
 */

namespace CodeKatas\Codewars;

use PHPUnit\Framework\TestCase;

class DirectionsReductionTest extends TestCase
{
    public function testIfOppositeDirectionsAreRemovedFromDirections(): void
    {
        $directionsReduction = new DirectionsReduction();
        $actual = ['NORTH', 'SOUTH', 'SOUTH', 'EAST', 'WEST', 'NORTH', 'WEST'];
        $expected = ['WEST'];
        $actual2 = ['NORTH', 'SOUTH', 'SOUTH', 'EAST', 'WEST', 'NORTH'];
        $expected2 = [];
        $actual3 = ['NORTH', 'SOUTH', 'SOUTH', 'EAST', 'WEST', 'NORTH', 'NORTH'];
        $expected3 = ['NORTH'];

        $this->assertSame($expected, $directionsReduction->simplify($actual));
        $this->assertSame($expected2, $directionsReduction->simplify($actual2));
        $this->assertSame($expected3, $directionsReduction->simplify($actual3));
    }

}
