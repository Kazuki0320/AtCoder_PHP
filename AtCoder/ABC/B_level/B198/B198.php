<?php
    fscanf(STDIN, "%d", $N);

    $flag = true;
    if($N != strrev($N)) {
        $M = "0" . $N;
        if($M != strrev($M)) {
            $flag = false;
        }
    }
    if($flag) echo "Yes" . PHP_EOL;
    else echo "No" . PHP_EOL;
