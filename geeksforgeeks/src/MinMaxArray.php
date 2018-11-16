<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 10:41
 */

namespace CodeKatas\GeeksForGeeks;


class MinMaxArray
{


    // Exercise clearly stated no use of min function!
    public function getMinValue(array $values)
    {
        $result = $values[0];

        foreach ($values as $key => $item){
            if ($item <= $result) {
                $result = $values[$key];
            }
        }

        return $result;
    }
    // Exercise clearly stated no use of max function!
    public function getMaxValue(array $values)
    {
        $result = $values[0];

        foreach ($values as $key => $item){
            if ($item >= $result) {
                $result = $values[$key];
            }
        }

        return $result;
    }
}