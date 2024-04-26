<?php
    list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));    
    $X = "";

    $X = $A;
    $A = $B;
    $B = $X;
    $X = $C;
    $C = $A;
    $A = $X;
    
    echo $A . " " . $B . " " . $C . "\n";
