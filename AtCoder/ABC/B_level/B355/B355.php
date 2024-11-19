<?php
    fscanf(STDIN, "%d %d", $N, $M);

    $sum = $N + $M;
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));

    $C = array_merge($A, $B);
    
    // C 内に A が連続して存在するか確認
    $C_str = implode(",", $C);
    var_dump($C_str);
    $A_str = implode(",", $A);
    var_dump($A_str);
    
    if (strpos($C_str, $A_str) !== false) {
        var_dump("A");
        echo "Yes\n"; // A が C に連続して含まれる
    } else {
        var_dump("B");
        echo "No\n"; // A が連続して含まれない
    }

