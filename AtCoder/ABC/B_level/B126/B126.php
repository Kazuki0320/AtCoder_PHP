<?php
    $S = trim(fgets(STDIN));
    $S1 = intval(substr($S, 0, 2));
    $S2 = intval(substr($S, 2, 2));

    if (($S1 < 1 || 12 < $S1) && ($S2 < 1 || 12 < $S2)) {
        echo "NA" . PHP_EOL;
    } else if (1 <= $S1 && $S1 <= 12 && 1 <= $S2 && $S2 <= 12) {
        echo "AMBIGUOUS" . PHP_EOL;
    } else if (1 <= $S1 && $S1 <= 12){
        echo "MMYY" . PHP_EOL;
    } else if (1 <= $S2 && $S2 <= 12) {
        echo "YYMM" . PHP_EOL;
    } 
