<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 17/11/18
 * Time: 9:48
 */

$handle = fopen("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

$i2 = 1;
$d2 = 1.0;
$s2 = "";

echo 'Please input an integer value: ' . PHP_EOL;
$i2 = (int)fgets($handle);
echo PHP_EOL . 'Please input a double value: ' . PHP_EOL;
$d2 = (double)fgets($handle);
echo PHP_EOL . 'Please input a string value: ' . PHP_EOL;
$s2 = (string)fgets($handle);


echo PHP_EOL . (int)$i + $i2 . PHP_EOL;
echo number_format($d + $d2, 1) . PHP_EOL;
echo (string)$s . $s2 . PHP_EOL;
fclose($handle);