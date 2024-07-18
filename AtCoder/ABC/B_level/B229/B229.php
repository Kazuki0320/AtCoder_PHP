<?php
    fscanf(STDIN, "%d%d", $A, $B);

    $A = strrev($A);
    $B = strrev($B);

    for($i = 0; $i < min(strlen($A), strlen($B)); $i++) {
        if($A[$i] + $B[$i] > 9) exit("Hard\n");
    }

    echo "Easy\n";
