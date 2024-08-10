<?php
    fscanf(STDIN, "%d", $N);

    $flag = false;
    $N = strval($N);
    if($N === strrev($N)) {
        $flag = true;
    } 
    
    for($i = 0; $i < 10; $i++) {
        $M = str_repeat("0", $i) . $N;
        if($M === strrev($M)) {
            $flag = true;
        }
    }
    if($flag) echo "Yes" . PHP_EOL;
    else echo "No" . PHP_EOL;
