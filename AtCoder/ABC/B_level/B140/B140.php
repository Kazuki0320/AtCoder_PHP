<?php
    fscanf(STDIN, "%d", $N);
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));
    $C = explode(" ", trim(fgets(STDIN)));

    $full = 0;
    for($i = 0; $i < $N; $i++) {
        $currentDish = $A[$i] - 1;
        $full += $B[$currentDish];
        
        if ($i < $N - 1) {
            $nextDish = $A[$i+1] - 1;
            if ($nextDish == $currentDish + 1) {
                $full += $C[$currentDish];
            }
        }
    }

    echo $full . PHP_EOL;
