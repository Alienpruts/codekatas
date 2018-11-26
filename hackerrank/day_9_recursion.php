<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

use CodeKatas\HackerRank\Factorial;

require_once __DIR__ . '/../vendor/autoload.php';

$factorial = new Factorial();

echo 'Enter the number to calculate the factorial from: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

echo PHP_EOL . 'The factorial of ' . $n . ' is : ' . $factorial->calculateFactorial($n) . PHP_EOL;



