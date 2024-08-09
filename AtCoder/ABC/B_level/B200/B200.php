<?php
    fscanf(STDIN, "%d%d", $N, $K);
    
    $sum = 0;
    for($i = 0; $i < $K; $i++) {
        if($N % 200 === 0) {
            $N = $N / 200;
        } else {
            $N = $N . 200;
        }
    }
    
    echo $N;
