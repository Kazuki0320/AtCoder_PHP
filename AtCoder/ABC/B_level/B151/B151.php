<?php
    fscanf(STDIN, "%d%d%d", $N, $K, $M);
    $S = explode(" ", trim(fgets(STDIN)));
    $sum = array_sum($S);

    for($i = 0; $i <= $K; $i++) {
        if(intdiv($sum+$i, $N) >= $M) {
            exit($i . PHP_EOL);
        }
    }

    echo -1 . PHP_EOL;
