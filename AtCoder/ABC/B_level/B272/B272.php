<?php
// 入力を読み取る
list($N, $M) = explode(" ", trim(fgets(STDIN)));

// ペアの初期化
$pairs = array_fill(1, $N, array_fill(1, $N, false));

// 舞踏会の情報を読み取ってペアの更新
for ($i = 0; $i < $M; $i++) {
    $x = explode(" ", trim(fgets(STDIN)));
    $num_participants = $x[0];

    // 各舞踏会の参加者を基にペアの更新
    for ($j = 1; $j <= $num_participants; $j++) {
        for ($k = $j + 1; $k <= $num_participants; $k++) {
            // var_dump($pairs[$x[$j]][$x[$k]]);
            $pairs[$x[$j]][$x[$k]] = true;
            $pairs[$x[$k]][$x[$j]] = true;
        }
    }
}

// 全てのペアが少なくとも1回同じ舞踏会に参加したかをチェック
$all_pairs_met = true;
for ($i = 1; $i <= $N; $i++) {
    for ($j = $i + 1; $j <= $N; $j++) {
        if (!$pairs[$i][$j]) {
            $all_pairs_met = false;
            break 2;
        }
    }
}

// 結果を出力
echo $all_pairs_met ? "Yes" : "No" . PHP_EOL;
?>

