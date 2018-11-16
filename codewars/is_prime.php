<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 0:22
 */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CodeKatas\Codewars\IsPrime;

$isPrime = new IsPrime();

$numbers = range(-1, 5099);

foreach ($numbers as $number) {
    $message = $isPrime->is_prime($number) ? ' IS a prime number' : ' IS NOT a prime number';
    echo 'The number ' . $number . $message . PHP_EOL;
}

