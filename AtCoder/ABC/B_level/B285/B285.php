<?php
fscanf(STDIN, "%d", $n); // 文字列の長さを入力
$s = trim(fgets(STDIN)); // 文字列を入力

// 各 i について最大の l を計算する
for ($i = 1; $i < $n; $i++) {
    $max_l = 0; // 最大の l を初期化
    for ($l = 0; $l + $i < $n; $l++) {
        if ($s[$l] == $s[$l + $i]) {
            break; // 条件が満たされない場合ループを終了
        }
        $max_l = $l + 1; // 条件を満たす最大の l を更新
    }
    echo $max_l . "\n"; // 各 i に対する最大の l を出力
}
?>

