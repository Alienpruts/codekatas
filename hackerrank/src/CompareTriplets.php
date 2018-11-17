<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 11:38
 */

namespace CodeKatas\HackerRank;


class CompareTriplets
{

    public function compareTriplets(array $array1, array $array2): array
    {
        $result = [0, 0];

        foreach ($array1 as $key => $value) {
            if ($array2[$key] > $value) {
                ++$result[1];
            } else {
                if ($array2[$key] < $value) {
                    ++$result[0];
                }
            }
        }

        return $result;
    }
}