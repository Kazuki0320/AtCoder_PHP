<?php
    fscanf(STDIN, "%d", $N);
    $weights = array_map("intval", explode(" ", trim(fgets(STDIN))));
    
    function calculateMinDifference(int $N, array $weights): int {
        $S1 = 0;
        $S2 = array_sum($weights);
        $minDiffrence = PHP_INT_MAX;
    
        // 重さの差の絶対値を計算するループ
        for ($T = 0; $T < $N - 1; $T++) {
            $S1 += $weights[$T];
            $S2 -= $weights[$T];
        
            // 差の絶対値を計算
            $diffrence = abs($S1 - $S2);
        
            // 最小の差の絶対値を更新
            if ($diffrence < $minDiffrence) {
                $minDiffrence = $diffrence;
            }
        }
        
        return $minDiffrence;
    }
    
    echo calculateMinDifference($N, $weights) . PHP_EOL;
