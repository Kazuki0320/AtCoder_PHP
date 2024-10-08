<?php
// 標準入力からデータを読み込む
fscanf(STDIN, "%d", $N); // 宝石の数Nを読み取る
$V = array_map('intval', explode(" ", trim(fgets(STDIN)))); // 宝石の価値Vi
$C = array_map('intval', explode(" ", trim(fgets(STDIN)))); // 宝石のコストCi

$maxProfit = 0;

// 各宝石の価値とコストの差を計算し、差が正のものだけを加算
for ($i = 0; $i < $N; $i++) {
    $profit = $V[$i] - $C[$i]; // 価値 - コスト
    if ($profit > 0) {
        $maxProfit += $profit; // 利益が正の場合のみ合計に加算
    }
}

// 最大の利益を出力
echo $maxProfit . PHP_EOL;
?>

