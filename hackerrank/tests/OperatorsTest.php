<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 11:07
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class OperatorsTest extends TestCase
{
    public function testIfMealIsCalculatedCorrectly(): void
    {
        $mealCalculator = new MealCalculator();
        $meal_cost = 12.00;
        $tip_percent = 20;
        $tax_percent = 8;

        $meal_cost2 = 15.50;
        $tip_percent2 = 15;
        $tax_percent2 = 10;

        $this->assertEquals(15, $mealCalculator->calculateMealCost($meal_cost, $tip_percent, $tax_percent));
        $this->assertEquals(19, $mealCalculator->calculateMealCost($meal_cost2, $tip_percent2, $tax_percent2));
    }
}
