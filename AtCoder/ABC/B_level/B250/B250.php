<?php

// 標準入力からA, B, Nの値を読み取る
fscanf(STDIN, "%d %d %d", $N, $A, $B);

// 結果を保持するための配列を初期化
$grid = [];

// タイルの配置ルールに従ってマス目を生成
for ($i = 0; $i < $A * $N; $i++) {
    $row = [];
    for ($j = 0; $j < $B * $N; $j++) {
        // タイル (ti, tj) の色を決定
        $ti = intdiv($i, $A);
        $tj = intdiv($j, $B);
        $color = (($ti + $tj) % 2 == 0) ? '.' : '#';
        
        // タイル内のマスの色を設定
        $row[] = $color;
    }
    $grid[] = $row;
}

// 結果を出力
foreach ($grid as $line) {
    echo implode('', $line) . "\n";
}

