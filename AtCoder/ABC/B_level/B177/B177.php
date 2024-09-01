<?php
    $A = trim(fgets(STDIN));
    $B = trim(fgets(STDIN));

    $min_changes = PHP_INT_MAX;
    $A_strlen = strlen($A);
    $B_strlen = strlen($B);

    for($i = 0; $i <= $A_strlen - $B_strlen; $i++) {
        $count = 0;
        
        for($j = 0; $j < $B_strlen; $j++) {
            if($A[$i + $j] != $B[$j]) {
                $count++;
            }
        }
        $min_changes = min($min_changes, $count);
    }

    echo $min_changes . PHP_EOL;
