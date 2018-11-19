<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 10:55
 */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CodeKatas\HackerRank\TimeConversion;


$timeConversion = new TimeConversion();

echo 'Please enter a time in 12-hour clock format ( hh:mm:ss[AM/PM]: ';
fscanf(STDIN, '%[^' . PHP_EOL . ']', $input);

echo PHP_EOL . 'The corresponding time in 24-hour clock format is : ' . $timeConversion->timeConversion($input) . PHP_EOL;