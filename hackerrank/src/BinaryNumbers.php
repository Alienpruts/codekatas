<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 26/11/18
 * Time: 21:58
 */

namespace CodeKatas\HackerRank;


class BinaryNumbers
{

    public function calculateConsecutive(int $int): int
    {
        $consecutive = 1;

        $binary = decbin($int);
        foreach (explode('0', $binary) as $item) {
            $consecutive = \strlen($item) > $consecutive ? \strlen($item) : $consecutive;
        }

        return $consecutive;
    }
}