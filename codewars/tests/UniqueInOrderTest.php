<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 23/11/18
 * Time: 19:09
 */

namespace CodeKatas\Codewars;

use PHPUnit\Framework\TestCase;

class UniqueInOrderTest extends TestCase
{
    public function testIfUniqueItemsAreReturnedInOrder(): void
    {

        $uniqueInOrder = new UniqueInOrder();

        $actual = 'AAAABBBCCDAABBB';
        $expected = ['A', 'B', 'C', 'D', 'A', 'B'];
        $actual2 = 'ABBCcAD';
        $expected2 = ['A', 'B', 'C', 'c', 'A', 'D'];
        $actual3 = [1, 2, 2, 3, 3];
        $expected3 = [1, 2, 3];

        $this->assertEquals($expected, $uniqueInOrder->calculateUniques($actual));
        $this->assertEquals($expected2, $uniqueInOrder->calculateUniques($actual2));
        $this->assertEquals($expected3, $uniqueInOrder->calculateUniques($actual3));
    }

}
