<?php
    fscanf(STIDN, "%d", $N);
    $S = explode(" ", trim(fgets(STDIN)));

    $result = 0;
    for($i = 0; $i < $N; $i++) {
        for($j = $i+1; $j < $N; $j++) {
            $result += $S[$i] * $S[$j];
        }
    }

    echo $result . PHP_EOL;
