<?php
    fscanf(STDIN, "%d%d%d%d", $A, $B, $C, $D);

    $max_number = [];
    $max_number = $A * $C;
    $max_number = $A * $D;
    $max_number = $B * $C;
    $max_number = $B * $D;

    echo max($max_number) . PHP_EOL;
