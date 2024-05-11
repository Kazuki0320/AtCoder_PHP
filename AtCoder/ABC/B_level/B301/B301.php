<?php
    fscanf(STDIN, "%d", $N);

    $num = explode(" ", trim(fgets(STDIN)));

    $ans = [];
    for($i = 0; $i < $N - 1; $i++) {
        if($num[$i] < $num[$i + 1]) {
            for($j = 0; $j < $num[$i + 1] - $num[$i]; $j++) {
                $ans [] = $num[$i] + $j;
            }
        }
        
        if($num[$i] > $num[$i + 1]) {
            for($j = 0; $j < $num[$i] - $num[$i + 1]; $j++) {
                $ans [] = $num[$i] - $j;
            }
        }
    }
    
    $ans[] = $num[$N - 1];
    
    echo implode(" ", $ans);
