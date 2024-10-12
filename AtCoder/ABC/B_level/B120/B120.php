<?php
    fscanf(STDIN, "%d %d %d", $A, $B, $K);

    $N = [];
    $min_num = min($A, $B);
    for($i = 1; $i <= $min_num; $i++) {
        if ($A % $i == 0 && $B % $i == 0) {
           $N [] = $i;
        }
    }
    
    // 共通約数を降順に並べ替える
    rsort($N);

    echo $N[$K-1] . PHP_EOL;
