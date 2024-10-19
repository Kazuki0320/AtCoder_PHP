<?php
    // 標準入力から値を読み込む
    fscanf(STDIN, "%d %d %d %d", $A, $M, $L, $R);

    // LとRの間に立てられるクリスマスツリーの本数を計算
    $minK = ceil(($L - $A) / $M);  // 最初のkの値
    $maxK = floor(($R - $A) / $M); // 最後のkの値

    // kの範囲内にある整数の数を計算
    if ($minK > $maxK) {
        // ツリーが立たない場合
        echo 0 . PHP_EOL;
    } else {
        // ツリーの本数を計算
        echo ($maxK - $minK + 1) . PHP_EOL;
    }
