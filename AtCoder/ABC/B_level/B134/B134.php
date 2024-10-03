<?php
    fscanf(STDIN, "%d%d", $N, $D);

    $range = 2 * $D + 1;
    echo ceil($N / $range) . PHP_EOL;
