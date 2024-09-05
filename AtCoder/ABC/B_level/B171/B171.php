<?php
    fscanf(STDIN, "%d%d", $A, $B);
    $S = explode(" ", trim(fgets(STDIN)));
    sort($S);
    $min_values = array_slice($S, 0, $B);
    $result = array_sum($min_values);

    echo $result . PHP_EOL;
