<?php
// 標準入力から点の数Nを読み取る
fscanf(STDIN, "%d", $N);

$points = [];
for ($i = 0; $i < $N; $i++) {
    // 各点の座標を読み取る
    fscanf(STDIN, "%d %d", $x, $y);
    $points[] = [$x, $y];
}

$maxDistance = 0;

for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $x1 = $points[$i][0];
        $y1 = $points[$i][1];
        $x2 = $points[$j][0];
        $y2 = $points[$j][1];

        // ユークリッド距離の平方を計算
        $distance = ($x2 - $x1) ** 2 + ($y2 - $y1) ** 2;
        
        // 最大距離を更新
        if ($distance > $maxDistance) {
            $maxDistance = $distance;
        }
    }
}

// 最大距離の平方根を取る
echo sqrt($maxDistance) . "\n";
?>

