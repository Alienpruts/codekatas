<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 0:22
 */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CodeKatas\Codewars\CenturyFromYear;

$centuryFromYear = new CenturyFromYear();
$inputs = [
    1,
    100,
    101,
    999,
    1765,
    2000,
];


foreach ($inputs as $input) {
    echo 'The year ' . $input . ' is in century # : ' . $centuryFromYear->centuryFromYear($input) . PHP_EOL;
}

