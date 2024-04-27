<?php
    fscanf(STDIN, "%d%d", $A, $B);
    $result1 = $A + $B;
    $result2 = $A - $B;
    $result3 = $A * $B;
    $total_result = [$result1, $result2, $result3];
    echo max($total_result);
