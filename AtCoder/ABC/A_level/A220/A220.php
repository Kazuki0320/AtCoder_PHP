<?php
    $X = explode(" ", trim(fgets(STDIN)));
    
    $A = intval($X[0]);
    $B = intval($X[1]);
    $C = intval($X[2]);
    
    for ($i = $A; $i <= $B; $i++) {
        if ($i % $C === 0) {
            echo $i;
            return;
        }
    }
    
    echo -1;
?>

