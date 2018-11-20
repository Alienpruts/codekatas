<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 20/11/18
 * Time: 12:22
 */

namespace CodeKatas\HackerRank;


class ClassVsInstance
{
    private $age;

    /**
     * ClassVsInstance constructor.
     * @param int $intAge
     */
    public function __construct(int $intAge = 0)
    {
        $this->age = $intAge >= 0 ? $intAge : 0;

        if ($this->age === 0) {
            echo 'Age is not valid, setting age to 0.';
        }
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return ClassVsInstance
     */
    public function yearPasses(): ClassVsInstance
    {
        ++$this->age;
        return $this;
    }

    /**
     * @return string
     */
    public function amIOld(): string
    {
        if ($this->age < 13) {
            return 'You are young.';
        }

        if ($this->age >= 13 && $this->age < 18) {
            return 'You are a teenager.';
        }

        return 'You are old.';
    }


}