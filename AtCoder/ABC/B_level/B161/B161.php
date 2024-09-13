<?php
    fscanf(STDIN, "%d%d", $N, $M);

    $S = explode(" ", trim(fgets(STDIN)));

    $sort_S = sort($S);
    $sum = array_sum($S);
    $q = 1 / 4 * $M;
    $flag = true;
    for($i = 0; $i < $M; $i++) {
        if($sort_$S < ($q)) {
            $flag = false;
            break;
        }
    }

    if($flag) echo "Yes" . PHP_EOL;
    else echo "No" . PHP_EOL;
