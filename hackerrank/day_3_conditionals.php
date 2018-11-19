<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 11:28
 */

declare(strict_types=1);

use CodeKatas\HackerRank\Conditional;

require_once __DIR__ . '/../vendor/autoload.php';

$conditional = new Conditional();

echo 'Please enter a number : ';
fscanf(STDIN, '%d' . PHP_EOL, $n);
echo PHP_EOL . 'Your number is  : ' . $conditional->conditional($n) . PHP_EOL;
