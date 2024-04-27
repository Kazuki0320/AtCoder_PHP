<?php
    fscanf(STDIN, "%d", $A);
    $result1 = (int)($A / 2);
    $result2 = $A % 2;
    echo $result1 + $result2;
