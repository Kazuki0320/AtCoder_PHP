<?php
    fscanf(STDIN, "%d", $N);

    $ans = 0;
    $ans += intdiv($N, 500) * 1000;
    $ans += intdiv($N%500, 5) * 5;

    echo $ans . PHP_EOL;
