<?php
    fscanf(STDIN, "%d", $N);
    
    if($N > 0) {
        echo intdiv($N + 9, 10) . PHP_EOL;
    } else {
        echo intdiv($N, 10) . PHP_EOL;
    }
