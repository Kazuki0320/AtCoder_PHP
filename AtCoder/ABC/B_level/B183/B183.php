<?php
    fscanf(STDIN, "%d%d%d%d", $sx, $sy, $gx, $gy);
    
    $result = ($sx*$gy + $gx*$sy) / ($sy + $gy);
    
    // 結果を小数点以下10桁で表示
    printf("%.10f\n", $result);
