<?php

function get_shortest(array $arr) {
    if (empty($arr)) {
        return null; 
    }

    $shortest = $arr[0]; 

    foreach($arr as $element) {
        if (strlen($element) < strlen($shortest)) {
            $shortest = $element;
        }
    }

    return $shortest;
}

?>