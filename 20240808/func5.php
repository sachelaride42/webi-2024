<?php

$num = 50;

function dividers($num){
    $arr = [];
    for($i = 1; $i < $num; $i++){
        if($num % $i == 0){
            array_push($arr, $i);
        }
    }
    return $arr;
}

print_r(dividers($num));
print_r(dividers(100));