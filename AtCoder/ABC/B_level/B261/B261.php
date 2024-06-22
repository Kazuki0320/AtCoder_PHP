<?php
fscanf(STDIN, "%d", $N);

$inp = [];

// 入力を2次元配列として格納
for ($i = 0; $i < $N; $i++) {
    $inp[$i] = str_split(trim(fgets(STDIN)));
}

// 行
for ($i = 0; $i < $N; $i++) {
    // 列
    for ($j = 0; $j < $N; $j++) {
        if ($i === $j) {
            continue; // 対角線上の要素は確認しない
        }
        $now = $inp[$i][$j];
        if ($now == '-') {
            continue;
        } elseif ($now == 'L' && $inp[$j][$i] != 'W' || $now == 'W' && $inp[$j][$i] != 'L' || $now == 'D' && $inp[$j][$i] != 'D'){
            echo 'incorrect';
            exit;
        }
    }
}

echo 'correct';
?>
