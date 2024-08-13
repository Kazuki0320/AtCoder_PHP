<?php
    fscanf(STDIN, "%d", $N);

    $A = [];
    $B = [];

    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d", $a, $b);
        $A [$i]= $a;
        $B [$i]= $b;
    }

    $A_min = min($A);
    $B_min = min($B);

    $all_count = 0;
    for($j = 0; $j < $N; $j++) {
        if($A[$j] == $A_min && $B[$j] == $B_min) {
            $all_count = $A_min + $B_min;
            array_splice($B, $j, 1);
        }
        $B_min = min($B);
        $AB_max = max($A_min, $B_min);
        if($all_count < $AB_max) {
            $result = $all_count;
        } else {
            $result = $AB_max;
        }
    }
    
    echo $result . PHP_EOL;

