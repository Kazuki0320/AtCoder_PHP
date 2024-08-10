<?php
    fscanf(STDIN, "%d", $N);

    $S1 = explode(" ", trim(fgets(STDIN)));
    $S2 = explode(" ", trim(fgets(STDIN)));

    $maxA = max($S1);
    $minB = min($S2);
    
    if ($maxA> $minB) {
        $result = 0;
    } else {
        $result = $minB - $maxA + 1;
    }
    
    echo $result;
