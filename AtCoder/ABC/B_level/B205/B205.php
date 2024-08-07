<?php
    fscanf(STDIN, "%d", $N);
    $S = explode(" ", trim(fgets(STDIN)));

    $duplicate_numbers = array_count_values($S);

    $flag = true;
    foreach($duplicate_numbers as $duplicate_number => $value) {
        if($value != 1) {
            $flag = false;
            break;
        }
    }

    sort($S);
    for($i = 0; $i < $N; $i++) {
        if($S[$i] != $i+1) {
            $flag = false;
        }
    }

    if($flag) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
