<?php
    [$N, $K] = explode(" ", trim(fgets(STDIN)));

    $ans = 0;
    while($N > 0) {
        $N = floor($N / $K);
        $ans++;
    }
    echo $ans;
