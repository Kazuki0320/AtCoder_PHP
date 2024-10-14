<?php
    fscanf(STDIN, "%d", $N);

    $S = [];
    $result = 0;

    for($i = 0; $i < $N; $i++) {
        $S []= fscanf(STDIN, "%d", $A);
    }

    $maxValue = max($S);
    for($j = 0; $j < $N; $j++) {
        if($S[$i] == $maxValue) {
            $result += $maxValue / 2;
        } else {
            $result += $S[$i];
        }
    }

    echo $result . PHP_EOL;
