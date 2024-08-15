<?php
    fscanf(STDIN, "%d", $N);
    $A = array_fill(0, $N, 0);
    $P = array_fill(0, $N, 0);
    $X = array_fill(0, $N, 0);

    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d%d", $A[$i], $P[$i], $X[$i]);
    }

    $min_price = PHP_INT_MAX;

    for($i = 0; $i < $N; $i++) {
        $stock = $X[$i] - $A[$i];
        if($stock > 0) {
            $min_price = min($min_price, $P[$i]);
        }
    }

    if ($min_price == PHP_INT_MAX) {
        echo "-1" . PHP_EOL;
    } else {
        echo $min_price . PHP_EOL;
    }
    
