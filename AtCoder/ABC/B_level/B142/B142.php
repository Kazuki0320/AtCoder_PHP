<?php
    fscanf(STDIN, "%d%d", $N, $K);
    $S = explode(" ", trim(fgets(STDIN)));

    $count = 0;
    for($i = 0; $i < $N; $i++) {
        if($K <= $S[$i]) {
            $count++;
        }
    }

    echo $count . PHP_EOL;
