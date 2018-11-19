<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 18:04
 */

declare(strict_types=1);

use CodeKatas\HackerRank\OrangesAndApples;

require_once __DIR__ . '/../vendor/autoload.php';

fscanf(STDIN, '%[^' . PHP_EOL . ']', $st_temp);
$st = explode(' ', $st_temp);
$s = (int)$st[0];
$t = (int)$st[1];

fscanf(STDIN, '%[^' . PHP_EOL . ']', $ab_temp);
$ab = explode(' ', $ab_temp);
$a = (int)$ab[0];
$b = (int)$ab[1];

fscanf(STDIN, '%[^' . PHP_EOL . ']', $mf_temp);
$mf = explode(' ', $mf_temp);
$m = (int)$mf[0];
$f = (int)$mf[1];

fscanf(STDIN, '%[^' . PHP_EOL . ']', $apples_temp);

$apples = array_map('\intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf(STDIN, '%[^' . PHP_EOL . ']', $oranges_temp);

$oranges = array_map('\intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

$orangesApples = new OrangesAndApples();

$result = $orangesApples->calculate($s, $t, $a, $b, $apples, $oranges);
echo 'The number of apples and oranges fallen on the house is ' . PHP_EOL;
echo $result[0] . PHP_EOL . $result[1] . PHP_EOL;