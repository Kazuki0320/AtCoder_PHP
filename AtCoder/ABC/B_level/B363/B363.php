<?php
    fscanf(STDIN, "%d %d %d", $N, $T, $P);
    $L = explode(" ", trim(fgets(STDIN)));

    $days = 0;
    $count = 0;
    foreach($L as $length) {
        if ($length >= $T) {
            $count++;
        }
    }

    if($count >= $P) {
        echo 0 . PHP_EOL;
        exit;
    }

    while($count < $P) {
        $days++;
        $count = 0;
        foreach($L as &$length) {
            $length++;
            if($length >= $T) {
                $count++;
            } 
        }
    }

    echo $days . PHP_EOL
