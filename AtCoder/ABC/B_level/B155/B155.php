<?php
    fscanf(STDIN, "%d", $N);

    $S = explode(" ", trim(fgets(STDIN)));

    $flag = true;
    for($i = 0; $i < $N; $i++) {
        if($S[$i] % 2 == 0 && ($S[$i] % 3 != 0 && $S[$i] % 5 != 0)) {
            echo "DENIED" . PHP_EOL;
            exit;
        }
    }
    
    echo "APPROVED" . PHP_EOL;
