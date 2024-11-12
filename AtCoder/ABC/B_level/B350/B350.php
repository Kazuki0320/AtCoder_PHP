<?php
// 入力処理
fscanf(STDIN, "%d %d", $N, $Q);
$T = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 初期設定：各穴に歯が生えていると仮定して、歯の本数をN本に設定
$teeth = array_fill(1, $N, true);
$allTooth = $N;

// 各治療を処理
foreach ($T as $hole) {
    if (isset($teeth[$hole])) {
        // 歯が生えている場合 -> 抜く
        unset($teeth[$hole]);
        $allTooth--;
    } else {
        // 歯が生えていない場合 -> 生やす
        $teeth[$hole] = true;
        $allTooth++;
    }
}

// 結果を出力
echo $allTooth . PHP_EOL;
