<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 16:49
 */

namespace CodeKatas\HackerRank;


class Staircase
{

    public function drawStaircase(int $int): string
    {

        $start = '#';

        $line = str_pad($start, $int, ' ', STR_PAD_LEFT);
        $result = '';

        for ($i = 1; $i <= $int; $i++) {
            $result .= $line;
            $result .= $i !== $int ? PHP_EOL : '';
            $line = str_pad(str_repeat($start, $i + 1), $int, ' ', STR_PAD_LEFT);
        }

        return $result;
    }
}