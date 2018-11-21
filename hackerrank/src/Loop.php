<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:31
 */

namespace CodeKatas\HackerRank;


class Loop
{

    public function calculateMultiples(int $value): array
    {
        $result = [];
        for ($i = 1; $i <= 10; $i++) {
            $result[] = $value * $i;
        }

        return $result;
    }
}