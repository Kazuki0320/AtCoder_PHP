<?php
    fscanf(STDIN, "%d", $N);
    $S = tirm(fgets(STDIN));

    $T1 = [];
    $T2 = [];
    $numberOfStrings = 0;
    if($N % 2 == 0) {
        $numberOfStrings = $N / 2;
    } else {
        echo "No" . PHP_EOL;
        exit;
    };

    for($i = 0; $i < $numberOfStrings; $i++) {
        $T[] = $S[$i];
    }

    for($j = $numberOfStrings; $j < strlen($S); $j++) {
        $T2[] = $S[$j];
    }

    if(in_array($T1, $T2)) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL
    };

