<?php
    fscanf(STDIN, "%d", $N);

    $A = array_fill(0, $N, 0);
    $P = array_fill(0, $N, 0);
    $X = array_fill(0, $N, 0);

    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d%d", $A[$i], $P[$i], $X[$i]);
    }

    $stock = 0;
    $store = [];

    for($i = 0; $i < $N; $i++) {
        for($j = 0; $j < $N; $j++) {
            $stock = $X[$j] - $A[$j];
            if(0 < $stock) {
                $store = $P[$j];
            }
        }
    }

    echo min($store) . PHP_EOL;
