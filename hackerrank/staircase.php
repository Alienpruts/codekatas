<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 17:30
 */
declare(strict_types=1);

use CodeKatas\HackerRank\Staircase;

require_once __DIR__ . '/../vendor/autoload.php';

echo 'Please enter a positive integer value : ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

$staircase = new Staircase();

echo PHP_EOL . $staircase->drawStaircase($n) . PHP_EOL;