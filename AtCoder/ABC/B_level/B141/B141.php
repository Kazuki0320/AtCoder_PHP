<?php
    // 入力の取得
    $S = str_split(trim(fgets(STDIN)));

    $flag = true;

    // 文字列を順番に確認
    for ($i = 0; $i < count($S); $i++) {
        // 奇数文字目 (インデックスが偶数のとき - インデックスは0から始まるため)
        if ($i % 2 == 0 && ($S[$i] != 'R' && $S[$i] != 'U' && $S[$i] != 'D')) {
            $flag = false;
            break;
        }
        // 偶数文字目 (インデックスが奇数のとき)
        if ($i % 2 == 1 && ($S[$i] != 'L' && $S[$i] != 'U' && $S[$i] != 'D')) {
            $flag = false;
            break;
        }
    }

    // 結果を出力
    echo $flag ? "Yes" : "No", PHP_EOL;
