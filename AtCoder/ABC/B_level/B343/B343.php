<?php
    fscanf(STDIN, "%d", $N);

    for($i = 0; $i < $N; $i++) {
        $T = array_map("intval", explode(" ", trim(fgets(STDIN))));
        for($j = 0;  $j < $N; $j++) {
            if($T[$j] === 1) {
                echo $j+1 . " ";
            }
        }
        echo PHP_EOL;
    }
