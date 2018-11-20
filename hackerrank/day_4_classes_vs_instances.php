<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 18/11/18
 * Time: 11:28
 */

declare(strict_types=1);

use CodeKatas\HackerRank\ClassVsInstance;

require_once __DIR__ . '/../vendor/autoload.php';

echo 'Please enter the number of test cases you could like to perform : ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

for ($i = 0; $i < $n; $i++) {
    echo PHP_EOL . 'Please enter age #' . ($i + 1) . ' :';
    $age = (int)fgets(STDIN);
    $p = new ClassVsInstance($age);
    echo PHP_EOL . $p->amIOld();
    for ($j = 0; $j < 3; $j++) {
        $p->yearPasses();
    }
    echo PHP_EOL . $p->amIOld() . PHP_EOL;
}

