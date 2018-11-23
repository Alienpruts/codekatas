<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 0:22
 */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CodeKatas\Codewars\UniqueInOrder;

$uniqueInOrder = new UniqueInOrder();

$inputs = [
    'AABBCCDDEEEEEAABBBCCCeefDDDD12',
    '1234345334256551',
    ['A', 'A', 'B', 'B', 'B'],
    [1, 3, 2, 3, 3, 3, 1],
];


foreach ($inputs as $input) {
    var_dump($input);
    var_dump($uniqueInOrder->calculateUniques($input));
}

