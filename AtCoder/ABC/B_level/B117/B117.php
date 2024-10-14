<?php
    fscanf(STDIN, "%d", $N);
    $S = explode(" ", trim(fgets(STDIN)));

    $maxValue = max($S);
    $key = array_search($maxValue, $S);

    if($key !== false) {
        unset($S[$key]);
    }
    
    $sum = array_sum($S);
    if($maxValue < $sum) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
