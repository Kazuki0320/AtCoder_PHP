<?php
    fscanf(STDIN, "%d", $N);

    $xyz = [];
    for($x = 0; $x <= $N; $x++) {
        for($y = 0; $y <= $N; $y++) {
            for($z = 0; $z <= $N; $z++) {
                $sum = $x + $y + $z;
                if($sum <= $N) {
                    $xyz []= [$x, $y, $z];
                } 
            }
        }
    }

    foreach ($xyz as $value => $key) {
        echo $key[0] . " " . $key[1] . " " . $key[2] .PHP_EOL;
    } 
