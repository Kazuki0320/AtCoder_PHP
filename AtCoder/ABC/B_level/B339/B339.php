<?php
fscanf(STDIN, "%d %d %d", $H, $W, $N);
    
function simulateGrid($H, $W, $N) {
    // グリッドを初期化 (すべてのマスを白に設定)
    $grid = array_fill(0, $H, array_fill(0, $W, 'white'));

    // 初期位置と向き
    $x = 0; // 行 (1,1) からスタートなので配列では (0,0)
    $y = 0; // 列
    $directionIndex = 0; // 最初は上を向いている

    // 移動方向
    $dx = [-1, 0, 1, 0]; // up, right, down, left の x軸の移動
    $dy = [0, 1, 0, -1]; // up, right, down, left の y軸の移動

    // 操作をN回繰り返す
    for ($i = 0; $i < $N; $i++) {
        // 現在のマスが白の場合
        if ($grid[$x][$y] === 'white') {
            $grid[$x][$y] = 'black'; // 黒に塗り替え
            $directionIndex = ($directionIndex + 1) % 4; // 時計回りに90度回転
        } else {
            // 現在のマスが黒の場合
            $grid[$x][$y] = 'white'; // 白に塗り替え
            $directionIndex = ($directionIndex + 3) % 4; // 反時計回りに90度回転
        }

        // 次の位置に進む (トーラス状のグリッドなので境界を超えたら反対側にループ)
        $x = ($x + $dx[$directionIndex] + $H) % $H;
        $y = ($y + $dy[$directionIndex] + $W) % $W;
    }

    // 結果のグリッドを表示
    foreach ($grid as $row) {
        foreach ($row as $cell) {
            echo $cell === 'white' ? '.' : '#';
        }
        echo "\n";
    }
}

// 例: グリッドサイズ H=5, W=5, 操作回数 N=10 の場合
simulateGrid($H, $W, $N);

