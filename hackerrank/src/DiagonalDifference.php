<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 14:58
 */

namespace CodeKatas\HackerRank;


class DiagonalDifference
{

    public function diagonalDifference(array $array): int
    {
        $rows = \count($array);
        $diag1 = $diag2 = 0;
        for ($i = 0; $i < $rows; $i++) {
            $diag1 += $array[$i][$i];
            $diag2 += $array[$i][$rows - ($i + 1)];
        }

        return abs($diag1 - $diag2);
    }
}