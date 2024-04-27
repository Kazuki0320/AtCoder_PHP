<?php
    fscanf(STDIN, "%d%d", $A, $B);
    $result = 0;
    if($A < 10) {
        $result =  100 * (10 - $A);
        $result = $result + $B;
    }
    echo $result;

