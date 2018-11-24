<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 0:40
 */

namespace CodeKatas\Codewars;


class CenturyFromYear
{

    public function centuryFromYear(int $year): int
    {
        return ceil($year / 100);
    }
}