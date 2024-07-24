<?php
// 入力の読み込み
fscanf(STDIN, "%d", $N);

// グラフの隣接リストを初期化
$graph = array_fill(1, $N, []);

for ($i = 0; $i < $N - 1; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $graph[$a][] = $b;
    $graph[$b][] = $a;
}

$center = -1;
foreach ($graph as $node => $neighbors) {
    if (count($neighbors) == $N - 1) {
        $center = $node;
        break;
    }
}

// スターかどうかを判定
if ($center != -1) {
    echo "Yes\n";
} else {
    echo "No\n";
}
?>
