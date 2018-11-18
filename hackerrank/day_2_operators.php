<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 11:28
 */

declare(strict_types=1);

use CodeKatas\HackerRank\MealCalculator;

require_once __DIR__ . '/../vendor/autoload.php';

$mealCalculator = new MealCalculator();

echo 'Please enter meal cost as double, with 2 decimals : ';
fscanf(STDIN, '%lf' . PHP_EOL, $meal_cost);
echo PHP_EOL . 'Please enter tip percentage : ';
fscanf(STDIN, '%d' . PHP_EOL, $tip_percent);
echo PHP_EOL . 'Please enter tax percentage : ';
fscanf(STDIN, '%d' . PHP_EOL, $tax_percent);

echo PHP_EOL . 'Your total meal cost is : ' . $mealCalculator->calculateMealCost($meal_cost, $tip_percent,
        $tax_percent);
