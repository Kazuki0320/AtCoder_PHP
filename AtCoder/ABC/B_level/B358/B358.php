<?php
    fscanf(STDIN, "%d %d", $N, $A);
    $T = explode(" ", trim(fgets(STDIN)));

    $current_time = 0;
    $result = [];

    foreach($T as $arrival_time) {
        if ($current_time < $arrival_time) {
            $current_time = $arrival_time;
        }
        $current_time += $A;
        $result[] = $current_time;
    }

    echo implode("\n", $result) . "\n";
