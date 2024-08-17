<?php
    fscanf(STDIN, "%d%d", $N, $X);
    $S = explode(" ", trim(fgets(STDIN)));

    $S = array_diff($S, [$X]);

    echo implode(" ", $S) . PHP_EOL;
