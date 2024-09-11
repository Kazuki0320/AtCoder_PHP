<?php
    fscanf(STDIN, "%d%d", $N, $M);
    $S = explode(" " , trim(fgets(STDIN)));
    
    $result = 0;
    for($i = 0; $i < $M; $i++) {
       $result += $S[$i];
    }

    $day = $N - $result;
    if(0 <= $day) {
        echo $day . PHP_EOL;
    } else {
        echo -1 . PHP_EOL;
    }
