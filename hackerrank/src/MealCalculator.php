<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 11:09
 */

namespace CodeKatas\HackerRank;


class MealCalculator
{


    public function calculateMealCost(float $cost, int $tip, int $tax): int
    {
        return (int)round($cost + number_format($cost * ($tip / 100), 2) + number_format($cost * ($tax / 100), 2), 0);
    }
}