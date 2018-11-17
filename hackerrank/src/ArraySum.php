<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 10:35
 */

namespace CodeKatas\HackerRank;


class ArraySum
{

    // Use of array_sum is forbidden, no checks needed for values (if int).
    public function arraySum(array $array)
    {

        $result = 0;
        foreach ($array as $item) {
            $result += (int)$item;
        }

        return $result;
    }
}