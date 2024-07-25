<?php
// 入力の読み込み
fscanf(STDIN, "%d %d", $H, $W);
$A = [];
for ($i = 0; $i < $H; $i++) {
    $A[$i] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$valid = true;

// 条件を満たすかどうかを確認する
for ($i1 = 0; $i1 < $H; $i1++) {
    for ($i2 = $i1 + 1; $i2 < $H; $i2++) {
        for ($j1 = 0; $j1 < $W; $j1++) {
            for ($j2 = $j1 + 1; $j2 < $W; $j2++) {
                if ($A[$i1][$j1] + $A[$i2][$j2] > $A[$i2][$j1] + $A[$i1][$j2]) {
                    $valid = false;
                    break 4; // 条件を満たさない場合はすぐに終了
                }
            }
        }
    }
}

// 結果を出力
if ($valid) {
    echo "Yes\n";
} else {
    echo "No\n";
}
?>
