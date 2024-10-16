<?php
$input_line = trim(fgets(STDIN));
list($N, $S, $M, $L) = array_map('intval', explode(' ', $input_line));

// dp配列の初期化
$N_max = $N + max(6, 8, 12); // 必要な卵数より少し多めに設定
$INF = PHP_INT_MAX;
$dp = array_fill(0, $N_max + 1, $INF); // dp[i]: 卵をi個買うのに必要な最小金額
$dp[0] = 0; // 卵0個の初期値

// パックの種類（サイズと価格）
$packs = array(
    array('size' => 6, 'price' => $S),
    array('size' => 8, 'price' => $M),
    array('size' => 12, 'price' => $L),
);

// 処理(Process): 動的計画法で最小金額を計算
for ($i = 0; $i <= $N_max; $i++) {
    // 条件(Condition): dp[$i]が初期値でない場合のみ更新
    if ($dp[$i] == $INF) continue;
    foreach ($packs as $pack) {
        $size = $pack['size'];
        $price = $pack['price'];
        // 条件(Condition): 配列範囲内か確認
        if ($i + $size <= $N_max) {
            if ($dp[$i + $size] > $dp[$i] + $price) {
                $dp[$i + $size] = $dp[$i] + $price;
            }
        }
    }
}

// 必要な卵数以上での最小金額を探索
$min_cost = $INF;
for ($k = $N; $k <= $N_max; $k++) {
    // 条件(Condition): dp[$k]が更新されているか
    if ($dp[$k] < $min_cost) {
        $min_cost = $dp[$k];
    }
}

// 結果を出力
echo $min_cost . PHP_EOL;
?>

