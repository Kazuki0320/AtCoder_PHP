<?php
    fscanf(STDIN, "%d%d%d%d", $A, $B, $C, $D);

    for($i = 0; $i < 100; $i++) {
        $A -= $D;
        $C -= $B;
        
        if($C <= 0) {
            echo "Yes" . PHP_EOL;
            exit;
        }

        if($A <= 0) {
            echo "No" . PHP_EOL;
            exit;
        }
    }
