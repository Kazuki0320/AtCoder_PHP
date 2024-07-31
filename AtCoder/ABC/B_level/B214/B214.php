<?php
    fscanf(STDIN, "%d%d", $S, $T);
    
    $count = 0;
    for($i = 0; $i <= $S; $i++) {
        for($j = 0; $i+$j <= $S; $j++) {
            for($q = 0; $i+$j+$q <= $S; $q++) {
                if($i * $j * $q <= $T) {
                    $count++;
                }
            }
        }
    }
    
    echo $count;

