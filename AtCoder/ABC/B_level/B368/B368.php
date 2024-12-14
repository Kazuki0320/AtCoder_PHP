<?php
    fscanf(STDIN, "%d", $N);
    $S = array_map('intval', explode(" ", trim(fgets(STDIN))));

    $operationCount = 0;

    while (count(array_filter($S, fn($x) => $x > 0)) > 1) {
        rsort($S);
        $S[0] -= 1;
        $S[1] -= 1;
        $operationCount++;
    }

    echo $operationCount . "\n";
