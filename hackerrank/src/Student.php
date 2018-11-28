<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 16:24
 */

namespace CodeKatas\HackerRank;


class Student extends Person
{
    private $testScores;

    /**
     * Student constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $id
     * @param array $scores
     */
    public function __construct(string $firstName, string $lastName, string $id, array $scores)
    {
        $this->testScores = $scores;
        parent::__construct($firstName, $lastName, $id);
    }

    public function calculate(): string
    {
        $average = array_sum($this->testScores) / \count($this->testScores);

        if (100 >= $average && $average >= 90) {
            return 'O';
        }

        if (90 > $average && $average >= 80) {
            return 'E';
        }

        if (80 > $average && $average >= 70) {
            return 'A';
        }

        if (70 > $average && $average >= 55) {
            return 'P';
        }

        if (55 > $average && $average >= 40) {
            return 'D';
        }

        return 'T';
    }
}