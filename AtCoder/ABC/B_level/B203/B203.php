<?php
    $S = explode(" ", trim(fgets(STDIN)));
    
    $result = 0;
    for($i = 1; $i <= $S[0]; $i++) {
        for($j = 1; $j <= $S[1]; $j++) {
            $result += ($i*100 + $j);
        }
    }

    echo $result;
