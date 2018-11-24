<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 0:39
 */

namespace CodeKatas\Codewars;

use PHPUnit\Framework\TestCase;

class CenturyFromYearTest extends TestCase
{
    public function testIfCorrectCenturyIsReturned(): void
    {
        $centuryFromYear = new CenturyFromYear();

        $this->assertEquals(18, $centuryFromYear->centuryFromYear(1705));
        $this->assertEquals(19, $centuryFromYear->centuryFromYear(1900));
        $this->assertEquals(17, $centuryFromYear->centuryFromYear(1601));
        $this->assertEquals(20, $centuryFromYear->centuryFromYear(2000));
        $this->assertEquals(1, $centuryFromYear->centuryFromYear(100));
        $this->assertEquals(1, $centuryFromYear->centuryFromYear(1));
        $this->assertEquals(2, $centuryFromYear->centuryFromYear(101));
    }
}
