<?php
    fscanf(STDIN, "%d", $A);
    
    $S = explode(" ", trim(fgets(STDIN)));

    function calculateHarmonicSumInverse($S) {
        $sum = 0;
        
        // 各要素の逆数の和を計算
        foreach ($S as $value) {
            $sum += 1 / $value;
        }
        
        if($sum == 0) {
            return 0;
        }
        
        return 1 / $sum;
    }

    echo calculateHarmonicSumInverse($S) . PHP_EOL;
  
