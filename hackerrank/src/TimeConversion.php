<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 19/11/18
 * Time: 10:20
 */

namespace CodeKatas\HackerRank;


class TimeConversion
{

    public function timeConversion($input): string
    {
        $am = false;
        $pieces = explode(':', $input);

        if (strpos($pieces[2], 'AM') > 0) {
            $am = true;
            $pieces[2] = str_replace('AM', '', $pieces[2]);
        } else {
            $pieces[2] = str_replace('PM', '', $pieces[2]);
        }

        if ($am === true && $pieces[0] === '12') {
            $pieces[0] = '00';
        } elseif ($am === false && $pieces[0] === '12') {
            $pieces[0] = '12';
        } elseif ($am === false) {
            $pieces[0] += 12;
        }

        return implode(':', $pieces);

    }
}