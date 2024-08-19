<?php
// 標準入力から N を読み取る
fscanf(STDIN, "%d", $N);

// N 個の点を読み取る
for ($i = 0; $i < $N; $i++) {
    list($x[],$y[]) = explode(" ",trim(fgets(STDIN)));
}

// ペアの数をカウントする変数
$count = 0;

// 点のペアを全てチェック
for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $result = ($y[$i]-$y[$j]) / ($x[$i]-$x[$j]);
        if(-1<= $result && $result <=1) $count++;
    }
}

// 結果を出力
echo $count . PHP_EOL;
