<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 9:43
 */

namespace CodeKatas\HackerRank;


class BirthdayCakeCandles
{


    public function birthdayCandles(array $array): int
    {
        return \count(array_keys($array, max($array)));
    }
}