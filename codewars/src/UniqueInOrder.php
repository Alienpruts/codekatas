<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 23/11/18
 * Time: 19:13
 */

namespace CodeKatas\Codewars;


class UniqueInOrder
{

    public function calculateUniques($value): array
    {
        // Empty strings / Arrays should be taken in account.
        if (empty($value)) {
            return array();
        }

        // Strings need to be converted to arrays.
        if (\is_string($value)) {
            $value = str_split($value);
        }

        // Iterate through array, if current char = previous, do nothing.
        // Else, add character to result.
        $review = $result[] = $value[0];
        foreach ($value as $char) {
            if ($char === $review) {
                continue;
            }
            $result[] = $char;
            $review = $char;
        }

        return $result;
    }
}