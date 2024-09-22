<?php
    fscanf(STDIN, "%d%d%d", $A, $B, $K);

    if($A >= $K) {
        $A -= $K;
    } else {
        $K -= $A;
        $A = 0;
        if($B >= $K) {
            $B -= $K;
        } else {
            $B = 0;
        }
    }
    
    echo $A . " " . $B . PHP_EOL;
