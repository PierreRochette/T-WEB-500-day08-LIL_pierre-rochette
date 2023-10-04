<?php

function calc_average (array $arr) {

    $total = 0; 

    foreach($arr as $element) {
        $total += $element; 
    }

    $average = $total / count($arr); 

    return round($average, 1); 


}