<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 16:24
 */

namespace CodeKatas\HackerRank;


class Person
{
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    public function printPerson(): void
    {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }

}