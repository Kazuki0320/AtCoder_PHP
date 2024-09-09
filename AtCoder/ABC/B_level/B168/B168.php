<?php
    fscanf(STDIN, "%d", $N);
    $S = trim(fgets(STDIN));

    if(strlen($S) <= $N) {
        echo $S . PHP_EOL;
    } else {
       $S1 = substr($S, 0, $N);
       echo $S1 . "..." . PHP_EOL;
    }
