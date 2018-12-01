<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 10:44
 */

use CodeKatas\Codewars\DirectionsReduction;

require_once __DIR__ . '/../vendor/autoload.php';

$directionReduction = new DirectionsReduction();

echo 'The directions [North, South, South, East, West, North, West] can be simplified to : ' . PHP_EOL;

print_r($directionReduction->simplify(['NORTH', 'SOUTH', 'SOUTH', 'EAST', 'WEST', 'NORTH', 'WEST']));