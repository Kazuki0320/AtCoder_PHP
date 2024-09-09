<?php
    $N = trim(fgets(STDIN));

    $year = 0;
    $coins = 100;

    while($conis < (int)$N) {
        $year++;
        $conins += intdiv($coins, 100);
    }

    echo $year . PHP_EOL;
