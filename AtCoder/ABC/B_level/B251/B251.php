<?php

// 入力の読み取り
fscanf(STDIN, "%d%d", $N, $W);
$A = array_map('intval', explode(" ", trim(fgets(STDIN))));

$goodIntegers = [];
    
// 1個のおもりの重さの和
for ($i = 0; $i < $N; $i++) {
    if ($A[$i] <= $W) {
        $goodIntegers[$A[$i]] = true;
    }
}

// 2個のおもりの重さの和
for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $sum = $A[$i] + $A[$j];
        if ($sum <= $W) {
            $goodIntegers[$sum] = true;
        }
    }
}

// 3個のおもりの重さの和
for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        for ($k = $j + 1; $k < $N; $k++) {
            $sum = $A[$i] + $A[$j] + $A[$k];
            if ($sum <= $W) {
                $goodIntegers[$sum] = true;
            }
        }
    }
}

// 良い整数の数をカウント
$countGoodIntegers = count($goodIntegers);

// 結果を出力
echo $countGoodIntegers . "\n";

