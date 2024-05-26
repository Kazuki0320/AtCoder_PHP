<?php
    fscanf(STDIN, "%d%d", $N, $M);

    $S = [];
    $T = [];
    for($i = 0; $i < $N; $i++) {
        $S []= trim(fgets(STDIN));
    }

    for($j = 0; $j < $M; $j++) {
        $T []= trim(fgets(STDIN));
    }

    $count = 0;
    foreach($S as $si) {
        $suffix = substr($si, -3);
        if(in_array($suffix, $T)) {
            $count++;
        }
    }

    echo $count;
