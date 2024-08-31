<?php
    fscanf(STDIN, "%d", $N);

    $count = 0;
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d", $A, $B);
        $imp [] = [$A, $B];
        if($imp[$i][0] == $imp[$i][1]) {
            $count++;
        }

        if(3 <= $count) {
            echo "Yes" . PHP_EOL;
            exit;
        }
    }

    echo "No" . PHP_EOL;
