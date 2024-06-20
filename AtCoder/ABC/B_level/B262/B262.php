<?php
fscanf(STDIN, "%d %d", $N, $M);

// 隣接行列を初期化
$adjMatrix = array_fill(0, $N, array_fill(0, $N, false));

// 辺の情報を入力し、隣接行列に記録
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $U, $V);
    $U--; // 0-indexed に変換
    $V--; // 0-indexed に変換
    $adjMatrix[$U][$V] = true;
    $adjMatrix[$V][$U] = true;
}

// 三角形の数を数える
$triangleCount = 0;

for ($a = 0; $a < $N; $a++) {
    for ($b = $a + 1; $b < $N; $b++) {
        if ($adjMatrix[$a][$b]) { // a と b が隣接
            for ($c = $b + 1; $c < $N; $c++) {
                if ($adjMatrix[$b][$c] && $adjMatrix[$c][$a]) { // b と c, c と a が隣接
                    $triangleCount++;
                }
            }
        }
    }
}

echo $triangleCount . PHP_EOL;

