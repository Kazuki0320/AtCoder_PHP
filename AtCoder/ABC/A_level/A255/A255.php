<?php
    fscanf(STDIN, "%d %d", $R, $C);
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));

    $arr[] = $A;
    $arr[] = $B;
    
     // $B9TNs(BA$B$NMWAG$r=PNO(B
    echo $arr[$R - 1][$C - 1];
?>

