<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

use CodeKatas\HackerRank\BinaryNumbers;

require_once __DIR__ . '/../vendor/autoload.php';

$binaryNumbers = new BinaryNumbers();

echo 'Enter a positive number to calculate the length of the largest consecutive 1\'s of the binary representation: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

echo PHP_EOL . 'The answer is ' . $n . ' is : ' . $binaryNumbers->calculateConsecutive($n) . ' ( ' . sprintf('%08d',
        decbin($n)) . ' )' . PHP_EOL;



