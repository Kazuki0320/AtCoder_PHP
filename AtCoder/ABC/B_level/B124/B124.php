<?php
    // 標準入力からNを取得
    fscanf(STDIN, "%d", $N);
    // 山の高さの配列を取得
    $mountain = array_map("intval", explode(" ", trim(fgets(STDIN))));

    // 最初の山は必ず海を眺められるのでカウントを1から始める
    $count = 1;
    // 最初の山の高さを最大の高さとして記録
    $maxHeight = $mountain[0];

    // 2番目の山から順にループ
    for ($i = 1; $i < $N; $i++) {
        // 現在の山の高さがこれまでの最大の高さよりも高いか同じなら
        if ($mountain[$i] >= $maxHeight) {
            $count++;
            // 最大の高さを更新
            $maxHeight = $mountain[$i];
        }
    }

    // 海を眺められる旅館の数を出力
    echo $count . PHP_EOL;
