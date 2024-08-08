<?php
    fscanf(STDIN, "%d", $N);

    $S = explode(" ", trim(fgets(STDIN)));

    $result = 0;
    for($i = 0; $i < $N; $i++) {
        if(!($S[$i] <= 10)) {
            $result += $S[$i] - 10;
        }
    }

    echo $result . PHP_EOL;
