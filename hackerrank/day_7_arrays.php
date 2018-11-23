<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

use CodeKatas\HackerRank\Day7Arrays;

require_once __DIR__ . '/../vendor/autoload.php';


echo 'Enter the size of the array you would like to revers: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

echo PHP_EOL . 'Enter ' . $n . ' numbers, separated by spaces : ';
fscanf(STDIN, '%[^' . PHP_EOL . ']', $arr_temp);
$arr = array_map('\intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$day7Arrays = new Day7Arrays();

echo PHP_EOL . 'The reversed array is : ' . PHP_EOL;
echo implode(' ', $day7Arrays->reverseArray($arr)) . PHP_EOL;


