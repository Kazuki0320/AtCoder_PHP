<?php
    fscanf(STDIN, "%d %d", $R, $C);
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));

    $arr[] = $A;
    $arr[] = $B;
    
     // 行列Aの要素を出力
    echo $arr[$R - 1][$C - 1];
?>

