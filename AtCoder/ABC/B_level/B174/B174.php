<?php
    fscanf(STDIN, "%d%d", $N, $D);

    $count = 0;
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d", $A, $B);
        $result = sqrt($A * $A + $B * $B); 
        if($result <= $D) {
            $count++;
        }
    }

    echo $count . PHP_EOL;
