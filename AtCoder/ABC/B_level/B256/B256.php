<?php
    $N = trim(fgets(STDIN));
    $A = explode(" ",trim(fgets(STDIN)));
    $x = array_fill(0,4,false);
    $P = 0;
    for($i=0; $i<$N; $i++) {
        //駒を置く
        $x[0] = true;
        
        //駒を動かす
        for($j=3; $j>=0; $j--) {
            if($x[$j]==true) {
                if($j+$A[$i]<=3) {
                    $x[$j] = false;
                    $x[$j+$A[$i]] = true;
                } else {
                    $x[$j] = false;
                    $P++;
                }
            }
        }
    }
    echo $P . PHP_EOL;
?>
