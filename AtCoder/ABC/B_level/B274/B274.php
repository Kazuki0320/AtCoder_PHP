<?php
    list($H,$W) = explode(" ",trim(fgets(STDIN)));
    for($i=0; $i<$H; $i++) $C[] = trim(fgets(STDIN));
    
    $X = array_fill(0,$W,0);
    for($i=0; $i<$H; $i++) {
        for($j=0; $j<$W; $j++) {
            if($C[$i][$j] == '#') $X[$j]++;
        }
    }
    
    echo implode(" ",$X) . PHP_EOL;
?>
