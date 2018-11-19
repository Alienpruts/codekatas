<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 11:20
 */

namespace CodeKatas\HackerRank;


class StudentGrading
{

    public function grade(int $grade): int
    {
        if ($grade % 5 < 3 || $grade < 38) {
            return $grade;
        }

        return $grade + (5 - ($grade % 5));
    }
}