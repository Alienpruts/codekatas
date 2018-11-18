<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 21:36
 */

namespace CodeKatas\HackerRank;


class MiniMaxSum
{


    public function miniMaxSum(array $array): string
    {
        $sum = array_sum($array);
        $minimumSum = $sum - max($array);
        $maximumSum = $sum - min($array);

        return $minimumSum . ' ' . $maximumSum;
    }
}
