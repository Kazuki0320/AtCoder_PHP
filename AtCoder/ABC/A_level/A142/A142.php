<?php
    fscanf(STDIN, "%d", $A);
    $odd_numbers = intval(($A + 1) / 2);
    $total_numbers = $A;
    $result = $odd_numbers / $total_numbers;
    echo $result;
