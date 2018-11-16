<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 10:57
 */
declare(strict_types=1);

use CodeKatas\GeeksForGeeks\MinMaxArray;


require_once __DIR__ . '/../vendor/autoload.php';

$minMaxArray = new MinMaxArray();

$sequence = range(-200, 300, 5);
shuffle($sequence);

echo 'The minimum value of a shuffled array with range start -200 to 300 with interval of 5 between two numbers is ' . $minMaxArray->getMinValue($sequence) . PHP_EOL;
echo 'The maximum value of a shuffled array with range start -200 to 300 with interval of 5 between two numbers is ' . $minMaxArray->getMaxValue($sequence) . PHP_EOL;