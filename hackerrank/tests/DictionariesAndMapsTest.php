<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 24/11/18
 * Time: 14:37
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class DictionariesAndMapsTest extends TestCase
{
    public function testIfNamesAreFoundInList(): void
    {
        $actual = [
            'sam' => 99912222,
            'tom' => 11122222,
            'harry' => 12299933,
        ];
        $expected = [
            'sam=99912222',
            'Not found',
            'harry=12299933',
        ];
        $search = [
            'sam',
            'edward',
            'harry',
        ];

        $dictionariesAndMaps = new DictionariesAndMaps();

        $this->assertEquals($expected, $dictionariesAndMaps->performSearch($actual, $search));
    }

}
