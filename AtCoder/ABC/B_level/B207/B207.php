<?php
    fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $D);

    if ($B >= $D * $C) {
        // 必要な操作が不可能
        echo "-1\n";
    } else {
        // 必要な操作回数を計算
        $needed_operations = (int)ceil($A / ($D * $C - $B));
        echo $needed_operations . "\n";
    }
