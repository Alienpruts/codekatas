<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 12:00
 */
declare(strict_types=1);

use CodeKatas\HackerRank\CompareTriplets;


require_once __DIR__ . '/../vendor/autoload.php';

$compareTriplets = new CompareTriplets();

echo 'Please provide the 3 scores for the first candidate, separated by spaces: ';
$a_temp = rtrim(fgets(STDIN));
$a = array_map('\intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

echo PHP_EOL . 'Please provide the 3 scores for the second candidate, separated by spaces: ';
$b_temp = rtrim(fgets(STDIN));
$b = array_map('\intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

echo PHP_EOL . implode(' ', $compareTriplets->compareTriplets($a, $b)) . PHP_EOL;