<?php
    fscanf(STDIN, "%d%d", $N, $X);
    $L = array_map('intval', explode(" ", trim(fgets(STDIN))));

    $currentPosition = 0;
    $bounceCount = 1;
    for($i = 0; $i < $N; $i++) {
        // 次の位置を計算
        $currentPosition += $L[$i];

        if ($currentPosition <= $X) {
            $bounceCount++;
        }
    }

    echo $bounceCount . PHP_EOL;
