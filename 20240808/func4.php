<?php

//$arr = array(1, 2, 3, 4, 5, 6, 7);
$arr = [7, 2, 5, 8, 9, 1, 3, 6];

function arraySort($arr, $type = "asc")
{
    for ($x = 0; $x < count($arr); $x++) {
        for ($y = 0; $y < count($arr) - $x - 1; $y++) {
            if ($type == "asc" && $arr[$y] > $arr[$y + 1] || $type == "desc" && $arr[$y] < $arr[$y + 1]) {
                $temp = $arr[$y];
                $arr[$y] = $arr[$y + 1];
                $arr[$y + 1] = $temp;
            }
        }
    }
    return $arr;
}

print_r(arraySort($arr,"asc"));