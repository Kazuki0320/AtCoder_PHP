<?php
    fscanf(STDIN, "%d", $N);

    $sum = 0;
    $btcValue = 380000;
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %d", $X, $U);
        if($U == "JPY") {
            $sum += $X;
        } else {
            $sum += $btcValue * $X;
        }
    }

    echo $sum . PHP_EOL;
