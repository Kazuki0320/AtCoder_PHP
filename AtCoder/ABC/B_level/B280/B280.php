<?php
    fscanf(STDIN, "%d", $A);
    $B = explode(" ", trim(fgets(STDIN)));
    $a = 0;

    for($i = 0; $i < $A; $i++) {
        echo $B[$i] - $a . " ";
        $a = $B[$i];
    }
