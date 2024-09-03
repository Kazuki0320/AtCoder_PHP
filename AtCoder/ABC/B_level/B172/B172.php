<?php
    $A = str_split(trim(fgets(STDIN)));
    $B = str_split(trim(fgets(STDIN)));

    $count = 0;
    for($i = 0; $i < $A; $i++) {
        if($A[$i] != $B[$i]) {
            $count++;
        }
    }

    echo $count . PHP_EOL;
