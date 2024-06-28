<?php
    fscanf(STDIN, "%d%d", $N, $K);
    
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));

    // 嫌いな食品のインデックスを取得
    $hate_food = [];
    for($i = 0; $i < $K; $i++) {
        $hate_food []= $B[$i] - 1;
    }

    // 最大のおいしさを持つ食品を特定
    $max_deliciousness = max($A);
    
    // 最大のおいしさを持つ食品が嫌いな食品かどうかをチェック
    foreach ($hate_food as $index) {
        if ($A[$index] == $max_deliciousness) {
            echo "Yes";
            exit;
        }
    }

    echo "No";
