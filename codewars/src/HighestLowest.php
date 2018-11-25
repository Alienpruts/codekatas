<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 1:28
 */

namespace CodeKatas\Codewars;


class HighestLowest
{

    public function calculateHighestLowest(string $string): string
    {
        $arr = explode(' ', $string);

        return max($arr) . ' ' . min($arr);
    }
}