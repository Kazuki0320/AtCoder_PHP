<?php
    fscanf(STDIN, "%d", $N);

    $result = 0;
    for($i = 1; $i <= $N; $i++) {
        if($i % 3 == 0 || $i % 5 == 0) {
            continue;
        }
        
        $result += $i;
    }

    echo $result . PHP_EOL;
