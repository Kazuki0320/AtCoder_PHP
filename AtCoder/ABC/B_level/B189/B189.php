<?php
    fscanf(STDIN, "%d%d", $N, $X);

    $alc = [];
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d", $A, $B);
        $alc [] = [$A, $B];
    }

    $alc_count = 0;
    for($j = 0; $j < $N; $j++) {
        $alc_result = $A * ($B / 100);
        $alc_count = $alc_result;
        if($X < $alc_count) {
            echo $j+1 . PHP_EOL;
            exit;
        }

        if($N - 1 == $j && $alc_count <= $X) {
            echo "-1" . PHP_EOL;
            exit;
        }
    }

    
