<?php
fscanf(STDIN, "%d", $N);
$p = explode(" ", trim(fgets(STDIN)));

function canBeSorted($p, $N) {
    $sorted_p = $p;
    sort($sorted_p);

    // 異なるインデックスをカウント
    $mismatch_count = 0;
    for ($i = 0; $i < $N; $i++) {
        if ($p[$i] != $sorted_p[$i]) {
            $mismatch_count++;
        }
    }

    // 異なる要素が2つ以下なら一度の入れ替えで昇順にできる
    if ($mismatch_count <= 2) {
        return "YES";
    } else {
        return "NO";
    }
}

echo canBeSorted($p, $N) . PHP_EOL;
