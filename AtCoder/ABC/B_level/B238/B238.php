<?php

function solvePizzaCutting($N, $A) {
    // 初期状態
    $cuts = [];
    $current_angle = 0;
    $cuts[] = $current_angle;
    
    // 各回の操作
    for ($i = 0; $i < $N; $i++) {
        $current_angle = ($current_angle + $A[$i]) % 360;
        if (!in_array($current_angle, $cuts)) {
            $cuts[] = $current_angle;
        }
    }
    
    // 切れ込みのリストをソート
    sort($cuts);
    
    // 最大のピースサイズを求める
    $max_piece_size = 0;
    $num_cuts = count($cuts);
    for ($i = 0; $i < $num_cuts; $i++) {
        $current_piece_size = ($i < $num_cuts - 1) ? $cuts[$i+1] - $cuts[$i] : 360 - $cuts[$i] + $cuts[0];
        if ($current_piece_size > $max_piece_size) {
            $max_piece_size = $current_piece_size;
        }
    }
    
    return $max_piece_size;
}

// 入力
fscanf(STDIN, "%d", $N);
$A = array_map('intval', explode(" ", trim(fgets(STDIN))));

// 問題を解く
$result = solvePizzaCutting($N, $A);
echo $result . "\n";

?>

