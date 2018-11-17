<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 14:45
 */
declare(strict_types=1);

use CodeKatas\HackerRank\PlusMinus;


require_once __DIR__ . '/../vendor/autoload.php';

echo 'Please specify how many elements this array will have: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);
echo PHP_EOL . 'Please enter ' . $n . ' integers, separated by spaces. Accepted values are negatives, positives and zeroes. :';
fscanf(STDIN, '%[^' . PHP_EOL . ']', $arr_temp);
$arr = array_map('\intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$plusMinus = new PlusMinus();


echo PHP_EOL . 'The ratio of positive, negative and zero elements are  : ' . PHP_EOL . $plusMinus->plusMinus($arr) . PHP_EOL;


