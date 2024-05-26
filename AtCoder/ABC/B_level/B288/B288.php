<?php
// 入力を読み取る
fscanf(STDIN, "%d%d", $A, $B);

$S = [];
$awardWinner = [];

// $A行のデータを読み取る
for($i = 0; $i < $A; $i++) {
    $S[] = trim(fgets(STDIN));  // 各行のデータを読み取る
}

// $B行のデータを$awardWinnerに追加する
for($i = 0; $i < $B; $i++) {
    $awardWinner[] = $S[$i];
}

// ソートする
sort($awardWinner);

// ソートされたデータを出力する
foreach($awardWinner as $winner) {
    echo $winner . "\n";
}
