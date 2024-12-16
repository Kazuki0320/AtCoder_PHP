<?php
    fscanf(STDIN, "%d", $N);

    $S = [];
    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %s", $A, $B);
        $S[] = [$A, $B];
    }

    $prev_L = null; 
    $prev_R = null; 
    $result_L = 0;  
    $result_R = 0;

    foreach ($S as $value) {
        if ($value[1] == "L") {
            if ($prev_L === null) {
                $prev_L = $value[0]; // 初回のLの値を記録
            } else {
                // 前回のLとの差分を計算
                $result_L += abs($value[0] - $prev_L);
                $prev_L = $value[0]; // 現在のLを新しい前回値として保存
            }
        } elseif ($value[1] == "R") {
            if ($prev_R === null) {
                $prev_R = $value[0]; // 初回のRの値を記録
            } else {
                // 前回のRとの差分を計算
                $result_R += abs($value[0] - $prev_R);
                $prev_R = $value[0]; // 現在のRを新しい前回値として保存
            }
        }
    }
    $final_result = $result_L + $result_R;
    
    echo $final_result . PHP_EOL;

