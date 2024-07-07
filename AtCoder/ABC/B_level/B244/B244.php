<?php

// 入力を読み取る
fscanf(STDIN, "%d", $N);
$T = trim(fgets(STDIN));

// 初期位置と方向の設定
$x = 0;
$y = 0;
$direction = 0; // 0: 東, 1: 南, 2: 西, 3: 北

// 各方向に対応する移動量
$dx = [1, 0, -1, 0];
$dy = [0, -1, 0, 1];

// 指示を処理
for ($i = 0; $i < $N; $i++) {
    if ($T[$i] === 'S') {
        // 進む
        $x += $dx[$direction];
        // var_dump($dx[$direction]);
        $y += $dy[$direction];
    } elseif ($T[$i] === 'R') {
        // 右に90度回転
        $direction = ($direction + 1) % 4;
    }
}

// 結果を表示
echo "$x $y\n";
?>
