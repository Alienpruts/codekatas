<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 24/11/18
 * Time: 14:39
 */

namespace CodeKatas\HackerRank;


class DictionariesAndMaps
{

    public function performSearch(array $data, array $search): array
    {
        $result = [];
        $data = array_flip($data);

        foreach ($search as $item) {
            if (!\in_array($item, $data, true)) {
                $result[] = 'Not found';
            } else {
                $result[] = $item . '=' . array_search($item, $data, true);
            }
        }

        return $result;
    }
}