<?php
    fscanf(STDIN, "%d", $N);
    $S = explode(" ", trim(fgets(STDIN)));
    
    $N2 = 2 * $N;
    $count = 0;
    for($i = 0; $i < $N2 - 2; $i++) {
        if($S[$i] == $S[$i+2]) {
            $count++;
        }
    }
    
    echo $count . PHP_EOL;
