<?php
    fscanf(STDIN, "%d%d", $N, $P);
    $nPoint = explode(" ", trim(fgets(STDIN)));

    $count = 0;
    for($i = 0; $i < $N; $i++) {
        if($nPoint[$i] < $P) {
            $count++;
        }
    }

    echo $count;
