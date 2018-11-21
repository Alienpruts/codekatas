<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

use CodeKatas\HackerRank\Loop;

require_once __DIR__ . '/../vendor/autoload.php';

echo 'Enter a number to show the multiples to 10 for : ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

$loop = new Loop();
$result = $loop->calculateMultiples($n);
var_dump($result);

echo PHP_EOL . 'The multiples of ' . $n . 'are : ' . PHP_EOL;
foreach ($result as $key => $value) {
    echo $n . ' x ' . ($key + 1) . ' = ' . $value . PHP_EOL;
}

