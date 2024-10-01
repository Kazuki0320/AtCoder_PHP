<?php
    fscanf(STDIN, "%d%d", $A, $B);

    function miniumTaps($A, $B) {
        // 差し込み口
        $outlets = 1;
        $taps = 0;
        
        // 差込口がB以上になるまで電源タップを追加
        while($outlets < $B) {
            $taps++;
            $outlets += ($A - 1);// タップを追加することで (A - 1) 個口増える
        }
        
        return $taps;
    }
    
    echo miniumTaps($A, $B) . PHP_EOL;
