<?php

// 標準入力からの読み込み
fscanf(STDIN, "%d", $N);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

// クエリの数を取得
fscanf(STDIN, "%d", $Q);

// クエリを順次処理する
for ($i = 0; $i < $Q; $i++) {
    $query = explode(' ', trim(fgets(STDIN)));
    $type = intval($query[0]);
    $k = intval($query[1]);

    if ($type == 1) {
        // クエリタイプ1: A[k]の値をxに変更
        $x = intval($query[2]);
        $A[$k - 1] = $x; // 配列のインデックスは0から始まるので、1を引く
    } elseif ($type == 2) {
        // クエリタイプ2: A[k]の値を出力
        echo $A[$k - 1] . PHP_EOL; // 配列のインデックスは0から始まるので、1を引く
    }
}
