<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 16:24
 */

namespace CodeKatas\HackerRank;

class ReviewLoop
{

    public function calculateEvenOdd(string $word): string
    {
        $even = $odd = '';

        foreach (str_split($word) as $key => $letter) {
            if ($key % 2 === 0) {
                $even .= $letter;
            } else {
                $odd .= $letter;
            }
        }

        return $even . ' ' . $odd;
    }
}