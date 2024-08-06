<?php
    fscanf(STDIN, "%d", $N);

    $result = 0;
    for($i = 1; $i < 100000000; $i++) {
        $result += $i;

        if($N <= $result) {
            echo $i . PHP_EOL;
            exit;
        }
    }    
