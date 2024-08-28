<?php
// 入力を取得
fscanf(STDIN, "%d", $N);
$x = array_map('intval', explode(' ', trim(fgets(STDIN))));

// マンハッタン距離の計算
$manhattan_distance = 0;
foreach ($x as $xi) {
    $manhattan_distance += abs($xi);
}

// ユークリッド距離の計算
$euclidean_distance = 0;
foreach ($x as $xi) {
    $euclidean_distance += $xi * $xi;
}
$euclidean_distance = sqrt($euclidean_distance);

// チェビシェフ距離の計算
$chebyshev_distance = 0;
foreach ($x as $xi) {
    $chebyshev_distance = max($chebyshev_distance, abs($xi));
}

// 結果を出力
echo $manhattan_distance . PHP_EOL;
printf("%.15f\n", $euclidean_distance);
echo $chebyshev_distance . PHP_EOL;
?>

