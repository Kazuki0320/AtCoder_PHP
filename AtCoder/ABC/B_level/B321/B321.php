<?php
// 入力の読み込み
[$N, $X] = array_map('intval', explode(" ", fgets(STDIN)));
$A = array_map('intval', explode(" ", fgets(STDIN)));
$A[] = -1;

for ($last = 0; $last <= 100; $last++) {
    $B = $A;
    $B[$N - 1] = $last;
    sort($B);
    $sum = 0;
    for ($i = 1; $i < $N - 1; $i++) {
        $sum += $B[$i];
    }
    if ($sum >= $X) {
        echo $last . PHP_EOL;
        exit();
    }
}

echo "-1" . PHP_EOL;
?>

