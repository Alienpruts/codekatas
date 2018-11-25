<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 0:22
 */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CodeKatas\Codewars\HighestLowest;

$highestLowest = new HighestLowest();

$inputs = [
    '1 2 3 4 5',
    '1 2 -3 4 5',
    '1 9 3 4 -5',
    '8 3 -5 42 -1 0 0 -9 4 7 4 -4',
    '4 5 29 54 4 0 -214 542 -64 1 -3 6 -6',
    '0 0',
];


foreach ($inputs as $input) {
    echo 'The highest and lowest values of "' . $input . '" are : ' . $highestLowest->calculateHighestLowest($input) . PHP_EOL;
}

