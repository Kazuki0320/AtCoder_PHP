<?php
fscanf(STDIN, "%d %d", $N, $M);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$X = [];

// 各食品からの栄養素摂取量を入力
for ($i = 0; $i < $N; $i++) {
    $X[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$sums = array_fill(0, $M, 0);
for($i = 0; $i < $N; $i++) {
    for($j = 0; $j < $M; $j++) {
        $sums[$j] += $X[$i][$j];
    }
}

// 目標を達成しているか判定
$isAchieved = true;
for ($j = 0; $j < $M; $j++) {
    if ($sums[$j] < $A[$j]) {
        $isAchieved = false;
        break;
    }
}

echo $isAchieved ? "Yes\n" : "No\n";

