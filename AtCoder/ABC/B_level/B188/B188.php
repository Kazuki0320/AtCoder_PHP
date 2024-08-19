<?php
    fscanf(STDIN, "%d", $N);

    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));
    
    $X = 0;
    
    for($i = 0; $i < $N; $i++) {
        $X += $A[$i] * $B[$i];
    }

    // 内積が 0 かどうかを判定して出力
    if ($X == 0) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }

