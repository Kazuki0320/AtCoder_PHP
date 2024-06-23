<?php
// 入力を読み込む
fscanf(STDIN, "%d %d %d", $N, $K, $Q);
$positions = array_map('intval', explode(' ', trim(fgets(STDIN))));
$operations = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 操作を順に実行
foreach ($operations as $op) {
    $index = $op - 1;  // 0-based index

    // コマが一番右のマスにある場合、何もしない
    if ($positions[$index] == $N) {
        continue;
    }

    // コマが右に動けるかチェック
    $canMove = true;
    foreach ($positions as $pos) {
        if ($pos == $positions[$index] + 1) {
            $canMove = false;
            break;
        }
    }

    // 動ける場合、コマを右に動かす
    if ($canMove) {
        $positions[$index]++;
    }
}

// 結果を出力
echo implode(" ", $positions) . PHP_EOL;
?>

