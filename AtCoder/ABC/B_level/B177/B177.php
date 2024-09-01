<?php
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));

    array_reverse($A);
    array_reverse($B);

    $count = 0;
    for($i = 0; $i < count($B); $i++) {
        if($B[$i] == $A[$i]) {
            for($j = $i; $i < count($B); $j++) {
                if($B[$j] != $A[$j]) {
                    $count++;
                }
            }
        }
    }

    echo $count . PHP_EOL;
