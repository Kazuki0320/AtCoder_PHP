<?php
    fscanf(STDIN, "%d %d %d", $r, $d, $x);

    $N []= ($r*$x)-$d;

    for($i = 0; $i < 9; $i++) {
        $result = $r * $N[$i] - $d;
        $N [] = $result;
    }

    foreach($N as $key => $value) {
        echo $value . PHP_EOL;
    } 
