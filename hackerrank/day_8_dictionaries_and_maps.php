<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 21/11/18
 * Time: 16:39
 */
declare(strict_types=1);

use CodeKatas\HackerRank\DictionariesAndMaps;

require_once __DIR__ . '/../vendor/autoload.php';

$arr = $search = [];
$dictionariesAndMaps = new DictionariesAndMaps();

echo 'Enter the number of contact items you would like to enter: ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

for ($i = 1; $i <= $n; $i++) {
    echo PHP_EOL . 'Enter a contact name and a number, separated by spaces: ' . PHP_EOL;
    fscanf(STDIN, '%[^' . PHP_EOL . ']', $temp);
    $temp = explode(' ', $temp);
    $arr[$temp[0]] = $temp[1];
}

echo PHP_EOL . 'Enter search terms, followed by ENTER. Press ENTER to get search results : ' . PHP_EOL;
$line = fgets(STDIN);
while ($line !== PHP_EOL) {
    $search [] = str_replace(PHP_EOL, '', $line);
    $line = fgets(STDIN);
}
echo PHP_EOL;

foreach ($dictionariesAndMaps->performSearch($arr, $search) as $result) {
    echo $result . PHP_EOL;
}




