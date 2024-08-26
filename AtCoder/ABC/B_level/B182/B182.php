<?php

// 入力を取得
$N = intval(trim(fgets(STDIN)));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

$ans = -1;
$mx = 0;

// 2から1000までの範囲でループ
for ($x = 2; $x <= 1000; $x++) {
    $s = 0;
    
    // 配列 $A の各要素に対して $x で割り切れるかチェック
    foreach ($A as $a) {
        if ($a % $x == 0) {
            $s++;
        }
    }
    
    // GCD度が現在の最大値より大きければ更新
    if ($mx < $s) {
        $mx = $s;
        $ans = $x;
    }
}

// 結果を出力
echo $ans . "\n";

?>

