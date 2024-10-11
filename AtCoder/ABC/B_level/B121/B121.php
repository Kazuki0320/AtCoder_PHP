<?php
    fscanf(STDIN, "%d %d %d", $N, $M, $C);
    $B = explode(" ", trim(fgets(STDIN)));
    $A = [];
    $count = 0;

    for($i = 0; $i < $N; $i++) {
        $A []= explode(" ", trim(fgets(STDIN)));
    }

    for($i = 0; $i < $N; $i++) {
        $ans = 0; 
        for($j = 0; $j < $M; $j++) {
            $ans += $A[$i][$j] * $B[$j];
        }
        
        $result = $ans + $C;
        if($result > 0) {
            $count++;
        }
    }
    
    echo $count . PHP_EOL;
