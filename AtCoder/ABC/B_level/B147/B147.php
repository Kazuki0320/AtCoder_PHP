<?php
    $S = trim(fgets(STDIN));

    $len = strlen($S);
    $count = 0;

    // 前半と後半を比較して、回文にするために必要なハグの回数を数える
    for ($i = 0; $i < $len / 2; $i++) {
        if ($S[$i] !== $S[$len - 1 - $i]) {
            // 対応する文字が異なれば、ハグが必要
            $count++;
        }
    }

    echo $count . PHP_EOL;
