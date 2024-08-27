<?php
    fscanf(STDIN, "%d", $N);
    
    $imp = [];
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d%d", $A, $B);
        
        $imp[] = [$A, $B];
    }

    $sum = 0;
    foreach ($imp as $value) {
        $start = $value[0];
        $end = $value[1];
        
        // 数列の和の公式を使用して範囲の合計を計算
        $rangeSum = ($start + $end) * ($end - $start + 1) / 2;
        $sum += $rangeSum;
    }
    
    echo $sum . PHP_EOL;
?>

