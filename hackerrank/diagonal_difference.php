<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 14:45
 */
declare(strict_types=1);

use CodeKatas\HackerRank\DiagonalDifference;


require_once __DIR__ . '/../vendor/autoload.php';

echo 'Input how many rows this array will have: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

$arr = [];
$diagonalDifference = new DiagonalDifference();

for ($i = 0; $i < $n; $i++) {
    echo PHP_EOL . 'Please provide ' . $n . ' values for this row, separated by a space : ';
    fscanf(STDIN, '%[^' . PHP_EOL . ']', $arr_temp);
    $arr[] = array_map('\intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

echo PHP_EOL . 'The absolute difference for the two diagonals of this array is : ' . $diagonalDifference->diagonalDifference($arr) . PHP_EOL;


