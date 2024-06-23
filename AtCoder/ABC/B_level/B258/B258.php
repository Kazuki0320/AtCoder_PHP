<?php
// 入力を受け取る
fscanf(STDIN, "%d", $N);
$grid = [];
for ($i = 0; $i < $N; $i++) {
    $grid[$i] = str_split(trim(fgets(STDIN)));
}

// 8方向の移動を定義する
$directions = [
    [0, 1],   // 右
    [1, 1],   // 右下
    [1, 0],   // 下
    [1, -1],  // 左下
    [0, -1],  // 左
    [-1, -1], // 左上
    [-1, 0],  // 上
    [-1, 1]   // 右上
];

$max_number = '';

// すべてのマスからスタート
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        // すべての方向へ
        foreach ($directions as $direction) {
            $number = '';
            $x = $i;
            $y = $j;

            // N回移動
            for ($k = 0; $k < $N; $k++) {
                $number .= $grid[$x][$y];
                $x = ($x + $direction[0] + $N) % $N;
                $y = ($y + $direction[1] + $N) % $N;
            }

            if ($number > $max_number) {
                $max_number = $number;
            }
        }
    }
}

echo $max_number . PHP_EOL;

