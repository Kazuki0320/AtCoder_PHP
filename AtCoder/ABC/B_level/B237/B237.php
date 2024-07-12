<?php
    fscanf(STDIN, "%d%d", $A, $B);

    $num = [];
    for($i = 0; $i < $A; $i++) {
        $num [$i] = explode(" ", trim(fgets(STDIN)));
    }

    for($i = 0; $i < $B; $i++) {
        for($j = 0; $j < $A; $j++)  {
            echo $num[$j][$i] . " ";
        }
        echo "\n";
    }
