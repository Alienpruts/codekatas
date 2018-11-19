<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 11:19
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class StudentGradingTest extends TestCase
{
    public function testIfStudentsAreGradedCorrectly(): void
    {
        $studentGrading = new StudentGrading();

        $this->assertEquals(75, $studentGrading->grade(73));
        $this->assertEquals(67, $studentGrading->grade(67));
        $this->assertEquals(40, $studentGrading->grade(40));
        $this->assertEquals(33, $studentGrading->grade(33));
        $this->assertEquals(70, $studentGrading->grade(68));
        $this->assertEquals(70, $studentGrading->grade(69));
        $this->assertEquals(70, $studentGrading->grade(70));
        $this->assertEquals(71, $studentGrading->grade(71));
        $this->assertEquals(72, $studentGrading->grade(72));
        $this->assertEquals(75, $studentGrading->grade(74));
        $this->assertEquals(75, $studentGrading->grade(75));
        $this->assertEquals(76, $studentGrading->grade(76));
        $this->assertEquals(77, $studentGrading->grade(77));
        $this->assertEquals(80, $studentGrading->grade(78));
        $this->assertEquals(80, $studentGrading->grade(79));
        $this->assertEquals(80, $studentGrading->grade(80));

    }

}
