<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 16:18
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class InheritanceTest extends TestCase
{
    public function testIfGradeIsReturned(): void
    {

        $actual = [
            'Heraldo Memelli 8135627',
            2,
            [100, 80],
        ];

        $explode = explode(' ', $actual[0]);

        $student = new Student($explode[1], $explode[0], $explode[2], $actual[2]);

        $expected = 'O';

        $this->assertSame($expected, $student->calculate());
    }
}
