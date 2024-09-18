<?php
    fscanf(STDIN, "%d%d", $H, $N);
    $S = explode(" ", trim(fgets(STDIN)));

    rsort($S);

    for($i = 0; $i < $N; $i++) {
        $H -= $S[$i];

        if($H <= 0) {
            echo "Yes" . PHP_EOL;
            exit;
        }
    }

    echo "No" . PHP_EOL;
