<?php
    fscanf(STDIN, "%d%d", $N, $K);

    $hasCandy = array_fill(1, $N, false);

    for($i = 0; $i < $K; $i++) {
        $line = trim(fgets(STDIN));
        $details = explode(" ", trim($line));

        foreach($details as $person) {
            $hasCandy[$person] = true;
        }
    }

    $count = 0;
    for ($i = 1; $i<=$N; $i++) {
        if(!$hasCandy[$i]) {
            $count++;
        }
    }

    echo $count . PHP_EOL;
