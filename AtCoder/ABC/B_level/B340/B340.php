<?php
    fscanf(STDIN, "%d", $N);

    $A = [];
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %d", $b, $x);
        if($b === 1) {
            $A []= $x;
        }
        
        if($b === 2) {
            $element = array_slice($A, -$x, 1);
            echo $element[0] . PHP_EOL;
        }
    }
