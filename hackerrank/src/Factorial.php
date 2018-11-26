<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 26/11/18
 * Time: 0:55
 */

namespace CodeKatas\HackerRank;


class Factorial
{

    public function calculateFactorial(int $number)
    {
        if ($number > 0) {
            return $number * $this->calculateFactorial($number - 1);
        }

        return 1;
    }
}