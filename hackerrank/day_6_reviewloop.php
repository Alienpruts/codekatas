<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

use CodeKatas\HackerRank\ReviewLoop;

require_once __DIR__ . '/../vendor/autoload.php';

$words = [];

echo 'Enter the number of words you would like to enter: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

$reviewLoop = new ReviewLoop();

for ($i = 1; $i <= $n; $i++) {
    echo PHP_EOL . 'Enter word # ' . $i . ': ';
    $words[] = (string)fgets(STDIN);
}

echo PHP_EOL . 'The even and odd indexed characters of each word are : ' . PHP_EOL;

foreach ($words as $word) {
    echo $reviewLoop->calculateEvenOdd(str_replace(PHP_EOL, '', $word)) . PHP_EOL;
}


