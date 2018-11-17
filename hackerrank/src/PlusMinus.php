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

        $pos = $pos === 0 ? number_format($pos, 6) : number_format($pos / $elements, 6);
        $neg = $neg === 0 ? number_format($neg, 6) : number_format($neg / $elements, 6);
        $zero = $zero === 0 ? number_format($zero, 6) : number_format($zero / $elements, 6);

        return $pos . PHP_EOL . $neg . PHP_EOL . $zero;
    }
}