<?php
    fscanf(STDIN, "%d", $N);

    for($i = 1; $i <= 9; $i++) {
        for($j = 1; $j <= 9; $j++) {
            if($i * $j == $N) {
                echo "Yes" . PHP_EOL;
                exit;
            }
        }
    }

    echo "No" . PHP_EOL;
