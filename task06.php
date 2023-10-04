<?php

function sequence(int $n) {
    
    if ($n < 0) {
        return; 
    }

    $last = '1'; 

    for($i = 0; $i <= $n; $i++) {
        echo $last . "\n"; 
        $t = str_split($last); 
        $l = ''; 
        $tt = []; 

        for($j = 0; $j < count($t); $j++) {
            if($l == $t[$j]){
                $tt[count($tt) - 1] = $tt[count($tt) - 1] . $t[$j]; 
            } else {
                $l = $t[$j]; 
                array_push($tt, $t[$j]); 
            }
        }

        $last = ''; 

        for($i = 0; $i < count($tt); $i++) {
            $last .= strlen($tt[$i]) . $tt[$i][0]; 
        }
    }

}

?>