<?php
// 入力の読み取り
fscanf(STDIN, "%d", $N);

// 入力の数列を整数の配列に変換
$num = array_map('intval', explode(" ", trim(fgets(STDIN))));

// 重複を排除してソート
$num = array_unique($num);
sort($num);

// 欠けている最小の非負整数を見つける
for ($i = 0; $i <= count($num); $i++) {
    // 配列の要素数が1つの場合の特別処理は不要
    // iがnumの要素と一致しない場合、iを出力して終了
    if (!in_array($i, $num)) {
        echo $i;
        break;
    }
}

