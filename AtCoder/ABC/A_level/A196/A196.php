<?php
    $X = explode(" ", trim(fgets(STDIN)));
    $Y = explode(" ", trim(fgets(STDIN)));
    
    $A = max($X);
    $B = min($Y);
    
    echo ($A - $B);
