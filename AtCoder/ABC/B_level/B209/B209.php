<?php
    fscanf(STDIN, "%d%d", $N, $X);

    $S = explode(" ", trim(fgets(STDIN)));

    $sum = 0;
    for($i = 0; $i < $N; $i++) {
        if($i % 2 === 1) {
            $result = $S[$i] - 1;
            $sum += $result;
        } else {
           $sum += $S[$i]; 
        }
    }

    echo ($sum <= $X) ? "Yes" : "No";
