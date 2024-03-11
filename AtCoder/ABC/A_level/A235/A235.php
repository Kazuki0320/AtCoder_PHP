<?php
    $numbers = str_split(trim(fgets(STDIN)));
    $result1 = $numbers[0] * 100 + $numbers[1] * 10 + $numbers[2] * 1;
    $result2 = $numbers[1] * 100 + $numbers[2] * 10 + $numbers[0] * 1;
    $result3 = $numbers[2] * 100 + $numbers[0] * 10 + $numbers[1] * 1;
    echo $result1 + $result2 + $result3;
