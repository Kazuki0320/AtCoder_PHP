<?php
    fscanf(STDIN, "%d%d", $A, $B);
    $A_result = $A * ($A - 1) / 2;
    $B_result = $B * ($B - 1) / 2;
    
    $result = $A_result + $B_result;
    echo $result;
