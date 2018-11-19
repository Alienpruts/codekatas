<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 9:06
 */

namespace CodeKatas\HackerRank;


class Conditional
{

    public function conditional(int $value): string
    {
        $result = 'Undetermined';
        if ($value % 2 === 1) {
            $result = 'Weird';
        } elseif ($value > 20 || ($value >= 2 && $value <= 5)) {
            $result = 'Not Weird';
        } elseif ($value >= 6 && $value <= 20) {
            $result = 'Weird';
        }

        return $result;
    }
}