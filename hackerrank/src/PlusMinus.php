<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 17:19
 */

namespace CodeKatas\HackerRank;


class PlusMinus
{

    public function plusMinus(array $array): string
    {
        $pos = $neg = $zero = 0;
        $elements = \count($array);

        foreach ($array as $item) {
            if ($item > 0) {
                ++$pos;
            } elseif ($item < 0) {
                ++$neg;
            } else {
                ++$zero;
            }
        }

        $pos = number_format($pos / $elements, 6);
        $neg = number_format($neg / $elements, 6);
        $zero = number_format($zero / $elements, 6);

        return $pos . PHP_EOL . $neg . PHP_EOL . $zero;
    }
}