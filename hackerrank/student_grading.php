<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 13:48
 */
declare(strict_types=1);

use CodeKatas\HackerRank\StudentGrading;

require_once __DIR__ . '/../vendor/autoload.php';

$studentGrading = new StudentGrading();
$grades = [];

echo 'How many grades will be processed? : ';
fscanf(STDIN, '%d' . PHP_EOL, $n);

for ($grades_itr = 0; $grades_itr < $n; $grades_itr++) {
    echo PHP_EOL . 'Enter a grade : ';
    fscanf(STDIN, '%d' . PHP_EOL, $grades_item);
    $grades[] = $studentGrading->grade($grades_item);
}

echo PHP_EOL . 'The rounded grades are : ' . PHP_EOL;
foreach ($grades as $grade) {
    echo $grade . PHP_EOL;
}

