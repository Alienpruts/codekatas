<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 10:15
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class TimeConversionTest extends TestCase
{
    public function testIfTimeIsConvertedTo24HFormat(): void
    {
        $timeConversion = new TimeConversion();

        $cases = [
            '07:05:45PM' => '19:05:45',
            '07:05:45AM' => '07:05:45',
            '12:00:00AM' => '00:00:00',
            '12:00:00PM' => '12:00:00',
            '11:59:59PM' => '23:59:59',
            '11:59:59AM' => '11:59:59',
        ];

        foreach ($cases as $input => $expected) {
            $this->assertEquals($expected, $timeConversion->timeConversion($input));
        }
    }

}
