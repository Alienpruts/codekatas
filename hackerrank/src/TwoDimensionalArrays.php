<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 27/11/18
 * Time: 22:54
 */

namespace CodeKatas\HackerRank;


class TwoDimensionalArrays
{

    public function calculateMaxSumHourglass(array $array): int
    {

        $sumHourglasses = [];

        for ($i = 0; $i < 4; $i++) {

            for ($j = 0; $j < 4; $j++) {
                $top = $array[$i][$j] + $array[$i][$j + 1] + $array[$i][$j + 2];
                $middle = $array[$i + 1][1 + $j];
                $bottom = $array[$i + 2][$j] + $array[$i + 2][$j + 1] + $array[$i + 2][$j + 2];

                $sumHourglasses[] = $top + $middle + $bottom;
            }
        }

        return max($sumHourglasses);
    }
}