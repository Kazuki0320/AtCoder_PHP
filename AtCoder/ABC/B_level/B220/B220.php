<?php
// 標準入力からデータを読み取る
fscanf(STDIN, "%d", $K);
fscanf(STDIN, "%s", $A);
fscanf(STDIN, "%s", $B);

// K進法の文字列を10進法に変換する
$A_decimal = base_convert($A, $K, 10);
$B_decimal = base_convert($B, $K, 10);

// 10進法で掛け算を行う
$result = bcmul($A_decimal, $B_decimal);

// 結果を出力する
echo $result . PHP_EOL;
?>

