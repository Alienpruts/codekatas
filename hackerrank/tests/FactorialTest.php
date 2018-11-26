<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 26/11/18
 * Time: 0:54
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    public function testIfFactorialIsCorrectlyCalculated(): void
    {
        $factorial = new Factorial();

        $this->assertEquals(1, $factorial->calculateFactorial(1));
        $this->assertEquals(2, $factorial->calculateFactorial(2));
        $this->assertEquals(6, $factorial->calculateFactorial(3));
        $this->assertEquals(24, $factorial->calculateFactorial(4));
        $this->assertEquals(120, $factorial->calculateFactorial(5));
        $this->assertEquals(720, $factorial->calculateFactorial(6));
        $this->assertEquals(5040, $factorial->calculateFactorial(7));
    }
}
