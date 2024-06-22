<?php
    fscanf(STDIN, "%d", $N);

    $inp = [];

    for ($i = 0; $i < $N; $i++) {
        $inp[$i] = str_split(trim(fgets(STDIN)));
    }
    // 行
    for($i = 0; $i < $N; $i++) {
        // 列
        for($j = 0; $j < $N; $j++) {
            if($i === $j) {
                break;
            } else if($inp[$i][$j] !== $inp[$j][$i]) {
                echo "incorrect";
                exit;
            }
        }
    }

    echo "correct";
