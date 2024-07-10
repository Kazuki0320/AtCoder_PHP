<?php

// 標準入力から整数を読み取る
fscanf(STDIN, "%d", $inputNumber);

// 10で割った商を計算
$quotient = intdiv($inputNumber, 10);

// 負の数で10で割り切れない場合に切り捨て
if ($inputNumber < 0 && $inputNumber % 10 !== 0) {
    $quotient--;
}

// 結果を出力
echo $quotient . PHP_EOL;

?>
