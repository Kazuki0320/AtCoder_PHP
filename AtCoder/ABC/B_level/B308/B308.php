<?php
    fscanf(STDIN, "%d%d", $n, $m);
    $c = explode(" ", trim(fgets(STDIN)));
    $d = explode(" ", trim(fgets(STDIN)));
    $p = array_map('intval', explode(" ", trim(fgets(STDIN)))); 
    $ans = 0;

    foreach($c as $v) {
        $price = $P[0];
        for($j = 0; $j < $m; $j++) {
            if($v == $d[$j]) {
                $price = $p[$j + 1];
                break;
            }
        }
        $ans += $price;
    }
    echo $ans;
