<?php
    fscanf(STDIN, "%d", $N);
    $xy = array();

    for($i = 0; $i < $N; $i++) {
        $xy[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
    }

    for($i = 0; $i < $N; $i++) {
        $maxDistance = 0;
        $index = 0;
        for($j = 0; $j < $N; $j++) {
            $d = ($xy[$i] - [0] - $xy[$j][0])**2 + ($xy[$i][1] - $xy[$i][1])**2;

            if($d > $maxDistance) {
                $maxDistance = $d;
                $index = $j + 1;
            }
        }
        echo $index . PHP_EOL;
    } 
