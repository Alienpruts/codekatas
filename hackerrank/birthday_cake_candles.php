<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 14:45
 */
declare(strict_types=1);

use CodeKatas\HackerRank\BirthdayCakeCandles;


require_once __DIR__ . '/../vendor/autoload.php';

echo 'Congratulations, how old is the subject? : ';
fscanf(STDIN, '%d' . PHP_EOL, $n);
echo PHP_EOL . 'Please enter ' . $n . ' integers, separated by spaces. These represent the height of the birthday candles : ';
fscanf(STDIN, '%[^' . PHP_EOL . ']', $arr_temp);
$arr = array_map('\intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$birthdayCakeCandles = new BirthdayCakeCandles();


echo PHP_EOL . 'The subject could blow : ' . $birthdayCakeCandles->birthdayCandles($arr) . ' candles of the birthday cake!' . PHP_EOL;


