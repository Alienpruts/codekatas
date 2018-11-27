<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CodeKatas\HackerRank\TwoDimensionalArrays;

$twoDimensionalArray = new TwoDimensionalArrays();

for ($i = 0; $i < 6; $i++) {
    echo 'Enter row # ' . ($i + 1) . ' containing 6 integers from -9 to +9, separated by spaces : ';
    fscanf(STDIN, '%[^' . PHP_EOL . ']', $arr_temp);
    $arr[] = array_map('\intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}


echo PHP_EOL . 'The highest sum of the 16 Hourglasses in this array  is : ' . $twoDimensionalArray->calculateMaxSumHourglass($arr) . PHP_EOL;



