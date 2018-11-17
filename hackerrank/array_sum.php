<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 10:47
 */
declare(strict_types=1);

use CodeKatas\HackerRank\ArraySum;


require_once __DIR__ . '/../vendor/autoload.php';

$stdin = fopen('php://stdin', 'r+b');

echo 'Enter number of elements to input: ';
fscanf($stdin, '%d' . PHP_EOL, $ar_count);
echo PHP_EOL . 'Enter elements, separated by space : ';
fscanf($stdin, '%[^' . PHP_EOL . ']', $ar_temp);

$array = array_map('\intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$arraySum = new ArraySum();

echo PHP_EOL . 'The sum of all elements is : ' . $arraySum->arraySum($array) . PHP_EOL;