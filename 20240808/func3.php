<?php

function average($type, $notes)
{
    $average = 0;
    switch ($type) {
        default:
        case 'A':
            for ($i = 0; $i < sizeof($notes); $i++) {
                $average += $notes[$i];
            }
            $average = $average / sizeof($notes);
            break;
        case 'P':
            $weights = [5, 3, 2];
            $weight = 0;
            for ($i = 0; $i < sizeof($notes); $i++) {
                $average += $notes[$i] * $weights[$i];
                $weight += $weights[$i];
            }
            $average = $average / $weight;
            break;
        case 'H':
            for ($i = 0; $i < sizeof($notes); $i++) {
                $average += 1 / $notes[$i];
            }
            $average = sizeof($notes) / $average;
            break;
    }
    return $average;
}

//echo "A ".average('A', [8, 7, 9])."\n";

//echo "P ".average('P', [8, 7, 9])."\n";

//echo "H ".average('H', [8, 7, 9])."\n";