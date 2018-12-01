<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 9:34
 */

namespace CodeKatas\Codewars;


class DirectionsReduction
{


    public function simplify(array $arr): array
    {
        $counts = array_count_values($arr);
        $result = [];

        $northSouthDiff = $counts['NORTH'] - $counts['SOUTH'];
        $eastWestDiff = $counts['EAST'] - $counts['WEST'];

        if ($northSouthDiff > 0) {
            for ($i = 1, $iMax = abs($northSouthDiff); $i <= $iMax; $i++) {
                $result[] = 'NORTH';
            }
        }

        if ($northSouthDiff < 0) {
            for ($i = 1, $iMax = abs($northSouthDiff); $i <= $iMax; $i++) {
                $result[] = 'SOUTH';
            }
        }

        if ($eastWestDiff > 0) {
            for ($i = 1, $iMax = abs($eastWestDiff); $i <= $iMax; $i++) {
                $result[] = 'EAST';
            }
        }

        if ($eastWestDiff < 0) {
            for ($i = 1, $iMax = abs($eastWestDiff); $i <= $iMax; $i++) {
                $result[] = 'WEST';
            }
        }

        return $result;
    }
}