<?php
    fscanf(STDIN, "%d", $N);
    fscanf(STDIN, "%s%s", $S, $T);

    $newString = "";

    for($j = 0; $j < $N; $j++) {
        $newString .= $S[$j];
        $newString .= $T[$j];
    }

    echo $newString . PHP_EOL;
