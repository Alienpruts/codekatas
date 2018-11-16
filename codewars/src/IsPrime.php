<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 9:43
 */

namespace CodeKatas\Codewars;


class IsPrime
{

    public function is_prime(int $n, $i = 2): bool {

        // Base cases : Negatives, 0 or 1 are by default non Prime Numbers
        // Special case for number 2, which would not fit in with the 'normal' flow
        if ($n <= 2)
            return $n === 2;
        // Better solution was to use % division, however, this is what I went with
        if (\is_int($n / $i))
            return false;
        // We do not need to loop trough every $n - 1 until 2 is reached : we can safely assume that when square root
        // of $n is reached, this can be considered an upper limit.
        if ($i * $i > $n)
            return true;

        // Check for next divisor recursively
        return $this->is_prime($n, $i + 1);

    }
}
