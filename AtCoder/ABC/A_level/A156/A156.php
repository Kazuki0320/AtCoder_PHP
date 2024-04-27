<?php
    fscanf(STDIN, "%d%d", $A, $B);
    $result = 0;
    if($A < 10) {
        $result =  100 * (10 - 2);
        $result = $result + $B;
    }
    echo $result;

