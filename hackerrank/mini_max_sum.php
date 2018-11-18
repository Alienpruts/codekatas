<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 21:43
 */

declare(strict_types=1);

use CodeKatas\HackerRank\MiniMaxSum;

require_once __DIR__ . '/../vendor/autoload.php';

$miniMaxSum = new MiniMaxSum();

echo 'Please type in 5 integers, separated by spaces : ';
fscanf(STDIN, '%[^' . PHP_EOL . ']', $arr_temp);

$arr = array_map('\intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo PHP_EOL . 'The minimum and the maximum sum is : ' . $miniMaxSum->miniMaxSum($arr) . PHP_EOL;