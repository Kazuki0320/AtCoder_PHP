<?php

// 現在の時刻を入力
fscanf(STDIN, "%d %d", $H, $M);

// 有効な時刻かどうかを確認する関数
function isValidTime($h, $m) {
    return $h >= 0 && $h < 24 && $m >= 0 && $m < 60;
}

// 見間違えやすい時刻かどうかを確認する関数
function isConfusingTime($h, $m) {
    // 各桁を取り出す
    $h1 = intdiv($h, 10);
    $h2 = $h % 10;
    $m1 = intdiv($m, 10);
    $m2 = $m % 10;

    // 右上と左下を入れ替える
    $new_h = $h1 * 10 + $m1;
    $new_m = $h2 * 10 + $m2;

    // 新しい時刻が有効かどうかを確認
    return isValidTime($new_h, $new_m);
}

// 時刻を進める関数
function incrementTime(&$h, &$m) {
    $m++;
    if ($m == 60) {
        $m = 0;
        $h++;
        if ($h == 24) {
            $h = 0;
        }
    }
}

// 現在の時刻から最初の見間違えやすい時刻を探す
while (!isConfusingTime($H, $M)) {
    incrementTime($H, $M);
}

// 結果を出力
printf("%d %d\n", $H, $M);

?>

