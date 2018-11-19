<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 17:19
 */

namespace CodeKatas\HackerRank;


class OrangesAndApples
{

    public function calculate(int $s, int $t, int $a, int $b, array $apples, array $oranges): array
    {
        $result = [];

        array_walk($apples, [$this, 'calculateLocation'], $a);
        array_walk($oranges, [$this, 'calculateLocation'], $b);

        $count = 0;
        foreach ($apples as $apple) {
            if ($apple >= $s && $apple <= $t) {
                $count++;
            }
        }
        $result[] = $count;

        $count = 0;
        foreach ($oranges as $orange) {
            if ($orange >= $s && $orange <= $t) {
                $count++;
            }
        }
        $result[] = $count;

        return $result;

    }

    public function calculateLocation(
        &$value,
        /** @noinspection PhpUnusedParameterInspection */
        $key,
        $location
    ) {
        $value += $location;
    }
}